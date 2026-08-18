<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use DB;
class NotificationController extends Controller
{
//   public function create(Request $request)
//     {
        
        
        
       


//  if ($request->isMethod('post')) {



//             $request->validate([
//                 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
//             ]);
           
//           if(!empty($request->image))
//           {
//               $imageName = time() . '.' . $request->image->extension();

//             $request->image->move(public_path('notifications'), $imageName);
//           }
//             else
//             {
//                 $imageName="";
//             }

//             Notification::create([
//                 "title" => $request->title,
//                 "image" => $imageName,
//                 "content"=>$request->content,
//                 "slug"=> Str::slug($request->title)
               
//             ]);

//             session()->flash('success', 'News  Post been created successfully');
//             return redirect()->route('notice-view');
//         }
//         return view('backend.notification.create');
//     }
    
//     public function edit(Request $request,$newsid)
//     {
        
//         $news= Notification::where('id',$newsid)->first();
        
        
//         if($request->isMethod('post'))
//         {
//              Notification::where('id',$newsid)->update([
//                 "title" => $request->title,
                
//                 "content"=>$request->content,
//               'canonical_link'=>$request->canonical_link
               
//             ]);
            
            
           
//           if(!empty($request->image))
//           {
//                 $request->validate([
//                 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
//                 ]);
//               $imageName = time() . '.' . $request->image->extension();

//               $request->image->move(public_path('notifications'), $imageName);
            
            
            
//              $image_path="notifications/".$news->image;
            
//             if(File::exists($image_path)) {
//     File::delete($image_path);
//             }
    
    
    
            
//               Notification::where('id',$newsid)->update([
//                 "image" => $imageName,
               
               
//             ]);
//             }
            
            
//             return back();
            
           
//         }
//         return view('backend.notification.edit',compact('news'));
//     }
    
    
    public function create(Request $request)
{
    if ($request->isMethod('post')) {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = "";
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('notifications'), $imageName);
        }

        // Remove inline CSS from content
        $cleanContent = preg_replace('/ style=("|\')(.*?)("|\')/i', '', $request->content);

        Notification::create([
            "title"   => $request->title,
            "image"   => $imageName,
            "content" => $cleanContent,
            "slug"    => Str::slug($request->title)
        ]);

        session()->flash('success', 'News Post has been created successfully');
        return redirect()->route('notice-view');
    }

    return view('backend.notification.create');
}

public function edit(Request $request, $newsid)
{
    $news = Notification::where('id', $newsid)->first();

    if ($request->isMethod('post')) {
        // Remove inline CSS from content
        $cleanContent = preg_replace('/ style=("|\')(.*?)("|\')/i', '', $request->content);

        Notification::where('id', $newsid)->update([
            "title"          => $request->title,
            "content"        => $cleanContent,
            'canonical_link' => $request->canonical_link
        ]);

        if (!empty($request->image)) {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('notifications'), $imageName);

            // Delete old image if exists
            $image_path = public_path("notifications/" . $news->image);
            if (!empty($news->image) && File::exists($image_path)) {
                File::delete($image_path);
            }

            Notification::where('id', $newsid)->update([
                "image" => $imageName,
            ]);
        }

        session()->flash('success', 'News Post has been updated successfully');
        return back();
    }

    return view('backend.notification.edit', compact('news'));
}
    
    
       public function seo_meta_information(Request $request,$newsid)
    {
        
        
        if($request->isMethod('post'))
        {
        Notification::where('id',$newsid)->update(
            
             ['seo_meta_title'=>$request->seo_meta_title,
        'seo_meta_keywords'=>$request->seo_meta_keywords,
        'seo_meta_description'=>$request->seo_meta_description
        ]
            );
            
            
            session()->flash('success','Seo Information has been updated successfully');
            return redirect()->back();
        }
        
        
        $seo=Notification::where('id',$newsid)->first();
        return view('backend.notification.seo',compact('seo'));
        
    }
  
    
    public function view()
    {
         
         $records=Notification::latest()->get();
         return view('backend.notification.view',compact('records'));
    }
    
    
        
public function faq(Request $request, $page_id)
{
    // Fetch single notification (page)
    $page = DB::table('notifications')->where('id', $page_id)->first();

    if ($request->isMethod('post')) {
        // Remove inline CSS from answer
        $cleanAnswer = preg_replace('/ style=("|\')(.*?)("|\')/i', '', $request->answer);

        DB::table('post_faq')->insert([
            "page_id"   => $page_id,
            "question"  => $request->question,
            "answer"    => $cleanAnswer,
            "post_type" => "news",
        ]);

        session()->flash('success', 'FAQ added successfully');
        return back();
    }

    return view('backend.faq.news-faq-create', [
        'pageList' => $page,
        'faqList'  => DB::table('post_faq')
            ->where('page_id', $page_id)
            ->where('post_type', 'news')
            ->orderBy("id", "desc")
            ->get()
    ]);
}
    
}


