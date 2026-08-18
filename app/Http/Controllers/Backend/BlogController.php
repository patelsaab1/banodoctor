<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use DB;
use Auth;
class BlogController extends Controller
{
//     public function create(Request $request)
//     {
        
        
        
//         $courses = [];
//         $category = Category::get();
//         foreach ($category as $c) {
//             $subcategory = Subcategory::where('category_id', $c->id)->get();

//             array_push($courses, [
//                 "category" => $c,
//                 "subcategory" => $subcategory
//             ]);
   
// }


//  if ($request->isMethod('post')) {



//             $request->validate([
//                 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100',
//             ]);

//             $imageName = time() . '.' . $request->image->extension();

//             $request->image->move(public_path('blog'), $imageName);

//             Blog::create([
//                 "title" => $request->title,
//                 "content"=>$request->content,
//                 "image" => $imageName,
//                 "category_id"=>$request->category_id,
         
//                 "slug" => Str::slug($request->title),
//             ]);


//               $this->activity_history(Auth::user()->email,$request->title.' Blog Post has been created successfully');
//             session()->flash('success', 'Blog Post has been created successfully');
//             return redirect()->route('blog-view');
//         }
//         return view('backend.blog.create',compact('courses'));
//     }
    
//     public function edit(Request $request,$blogid)
//     {
       
//       $blog=Blog::where('id',$blogid)->first();
       
      
//       if($request->isMethod('post'))
//       {
           
//           if(!empty( $request->image))
//           {
               
//               $request->validate([
//                 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
//             ]);

//             $imageName = time() . '.' . $request->image->extension();

//             $request->image->move(public_path('blog'), $imageName);
            
//              Blog::where('id',$blogid)->update(["image" => $imageName]);
//               $this->activity_history(Auth::user()->email,'Blog Image Has been updated successfully');
//           }
            

//             Blog::where('id',$blogid)->update([
//                 "title" => $request->title,
//                 "content"=>$request->content,
//                 'canonical_link'=>$request->canonical_link
                
                
//             ]);
            
//              $this->activity_history(Auth::user()->email,$request->title.' Blog  Has been updated successfully');
            
//             return back();

//       }
       
//         return view('backend.blog.edit',compact('blog'));
//     }
    
    
    public function create(Request $request)
{
    $courses = [];
    $category = Category::get();
    foreach ($category as $c) {
        $subcategory = Subcategory::where('category_id', $c->id)->get();
        $courses[] = [
            "category" => $c,
            "subcategory" => $subcategory
        ];
    }

    if ($request->isMethod('post')) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('blog'), $imageName);

        // Remove inline CSS from content
        $cleanContent = preg_replace('/ style=("|\')(.*?)("|\')/i', '', $request->content);

        Blog::create([
            "title"       => $request->title,
            "content"     => $cleanContent,
            "image"       => $imageName,
            "category_id" => $request->category_id,
            "slug"        => Str::slug($request->title),
        ]);

        $this->activity_history(Auth::user()->email, $request->title . ' Blog Post has been created successfully');
        session()->flash('success', 'Blog Post has been created successfully');

        return redirect()->route('blog-view');
    }

    return view('backend.blog.create', compact('courses'));
}

public function edit(Request $request, $blogid)
{
    $blog = Blog::where('id', $blogid)->first();

    if ($request->isMethod('post')) {
        if (!empty($request->image)) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blog'), $imageName);

            Blog::where('id', $blogid)->update(["image" => $imageName]);
            $this->activity_history(Auth::user()->email, 'Blog Image has been updated successfully');
        }

        // Remove inline CSS from content
        $cleanContent = preg_replace('/ style=("|\')(.*?)("|\')/i', '', $request->content);

        Blog::where('id', $blogid)->update([
            "title"          => $request->title,
            "content"        => $cleanContent,
            "canonical_link" => $request->canonical_link,
        ]);

        $this->activity_history(Auth::user()->email, $request->title . ' Blog has been updated successfully');

        return back();
    }

    return view('backend.blog.edit', compact('blog'));
}
    
    public function seo_meta_information(Request $request,$blogid)
    {
        
        
        if($request->isMethod('post'))
        {
        Blog::where('id',$blogid)->update(
            
             ['seo_meta_title'=>$request->seo_meta_title,
        'seo_meta_keywords'=>$request->seo_meta_keywords,
        'seo_meta_description'=>$request->seo_meta_description,
        
        ]
            );
            
            
            session()->flash('success',$request->seo_meta_title.' Seo Information has been updated successfully');
            
              $this->activity_history(Auth::user()->email,$request->seo_meta_title.' SEO Information Has been updated successfully');
              
            return redirect()->back();
        }
        
        
        $seo=Blog::where('id',$blogid)->first();
        return view('backend.blog.seo',compact('seo'));
        
    }
    
    public function view()
    {
         
         $records=Blog::latest()->get();
         return view('backend.blog.view',compact('records'));
    }
    
    
    
    //      public function faq(Request $request,$page_id)
    // {
        
    //     $pageList=DB::table('blogs')->where('id',$page_id)->get();
        
    //     if($request->isMethod('post'))
    //     {
            
            
    //         DB::table('post_faq')->insert(
    //             ["page_id"=>$page_id,
    //                 "question"=>$request->question,
    //             "answer"=>$request->answer,
    //              "post_type"=>"blog",
    //             ]);
                
    //             session()->flash('success',$request->question.' faq added successfully');
                
                
    //               $this->activity_history(Auth::user()->email,'faq added successfully');
                  
    //             return back();
    //     }
        
    //     return view('backend.faq.blog-faq-create',
    //     [
    //         'pageList'=>$pageList,
    //         'faqList'=>DB::table('post_faq')->where('page_id',$page_id)->where('post_type','blog')->orderBy("id","desc")->get()
    //         ]);
    // }  
    

    public function faq(Request $request, $page_id)
{
    // Get the blog page
    $page = DB::table('blogs')->find($page_id);

    if (!$page) {
        abort(404, 'Blog not found');
    }

    if ($request->isMethod('post')) {
        // Validate input
        $validated = $request->validate([
            'question' => 'required|string',
            'answer'   => 'required|string',
        ]);

        try {
            DB::beginTransaction();

            // ✅ Clean inline CSS from answer
            $cleanAnswer = preg_replace('/\s*style=("|\')(.*?)\1/', '', $validated['answer']);

            DB::table('post_faq')->insert([
                'page_id'    => $page_id,
                'question'   => $validated['question'],
                'answer'     => $cleanAnswer,
                'post_type'  => 'blog',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::commit();

            session()->flash('success', $validated['question'] . ' FAQ added successfully');

            $this->activity_history(Auth::user()->email, 'FAQ added successfully');

            return back();

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error saving FAQ: ' . $e->getMessage());
        }
    }

    return view('backend.faq.blog-faq-create', [
        'pageList' => [$page],
        'faqList'  => DB::table('post_faq')
                        ->where('page_id', $page_id)
                        ->where('post_type', 'blog')
                        ->orderByDesc("id")
                        ->get()
    ]);
}

}
