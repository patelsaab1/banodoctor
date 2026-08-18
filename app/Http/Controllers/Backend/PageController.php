<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use DB;

class PageController extends Controller
{
   public function create(Request $request)
{
    if ($request->isMethod('post')) {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100',
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('page'), $imageName);

        // ✅ Sanitize inputs (remove inline CSS)
        $clean = function ($value) {
            return is_string($value)
                ? preg_replace('/\s*style=("|\')(.*?)\1/', '', $value)
                : $value;
        };

        Page::create([
            "page_title"           => $clean($request->page_title),
            "page_subtitle"        => $clean($request->page_subtitle),
            "page_shortdescription"=> $clean($request->page_shortdescription),
            "title"                => $clean($request->title),
            "content"              => $clean($request->content),
            "image"                => $imageName,
            "slug"                 => Str::slug($request->title),
        ]);

        session()->flash('success', 'Page has been created successfully');
        return redirect()->route('page-view');
    }

    return view('backend.pages.create');
}

    
 public function edit(Request $request, $pageid)
{
    if ($request->isMethod('post')) {

        $data = [];

        // ✅ Helper to remove inline CSS
        $clean = function ($value) {
            return is_string($value)
                ? preg_replace('/\s*style=("|\')(.*?)\1/', '', $value)
                : $value;
        };

        // Handle image upload
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('page'), $imageName);

            $data['image'] = $imageName;
        }

        // Update other fields (sanitize them)
        $data['page_title']           = $clean($request->page_title);
        $data['page_subtitle']        = $clean($request->page_subtitle);
        $data['page_shortdescription']= $clean($request->page_shortdescription);
        $data['title']                = $clean($request->title);
        $data['content']              = $clean($request->content);
        $data['canonical_link']       = $clean($request->canonical_link);
        
         $data['state']       = $clean($request->state);
         $data['country']       = $clean($request->country);
         $data['course']       = $clean($request->course);
         
          $data['page_type']       = $clean($request->page_type);
          
          
         
         
         

        Page::where('id', $pageid)->update($data);

        session()->flash('success', 'Page has been updated successfully');
        return back();
    }

    $page = Page::where('id', $pageid)->first();
        $country = DB::table('country')->get();
    $states = DB::table('states')->get();
    
    $courses=Subcategory::get();
    
    return view('backend.pages.edit', compact('page','country','states','courses'));
}

    
    
    
    
    public function view()
    {
        
  
    
         $records=Page::query()
     ->select('pages.*')
    ->addSelect(DB::raw('(SELECT count(*) FROM post_faq WHERE post_faq.page_id = pages.id AND post_type="page") as faqCount'))
    ->latest()
    ->get();
    
         return view('backend.pages.view',
         compact('records'));
    }
    

    
        public function seo_meta_information(Request $request,$pageid)
    {
       
         if($request->isMethod('post'))
        {
       
        Page::where('id',$pageid)->update(
            
             ['seo_meta_title'=>$request->seo_meta_title,
        'seo_meta_keywords'=>$request->seo_meta_keywords,
        'seo_meta_description'=>$request->seo_meta_description
        ]
            );
            
            
             session()->flash('success','Seo Information has been updated successfully');
            return redirect()->back();
       
    } 
        $seo=Page::where('id',$pageid)->first();
        return view('backend.pages.seo',compact('seo'));
        
    }
    
    
    
    public function  embedVideo(Request $request,$pageid)
    {
           if($request->isMethod('post'))
        {
       
        Page::where('id',$pageid)->update(
            
        [
        'video_embedding'=>$request->video_embedding
        ]
            );
            
            
             session()->flash('success','Video Embed Successfully');
            return redirect()->back();
    }
}
    


public function faq(Request $request, $page_id)
{
    // Get the page
    $page = DB::table('pages')->find($page_id);
    
    if (!$page) {
        abort(404, 'Page not found');
    }

    if ($request->isMethod('post')) {
        // Validate the request
        $validated = $request->validate([
            'page_id' => 'required',
            'post_type' => 'required',
            'faqs' => 'required|array|min:1',
            'faqs.*.question' => 'required',
            'faqs.*.answer' => 'required',
        ]);

        try {
            DB::beginTransaction();
            
            $faqsToInsert = [];
            $now = now();
            
            foreach ($validated['faqs'] as $faq) {
                // ✅ Clean inline CSS from answer
                $cleanAnswer = preg_replace('/\s*style=("|\')(.*?)\1/', '', $faq['answer']);

                $faqsToInsert[] = [
                    'page_id'    => $validated['page_id'],
                    'question'   => $faq['question'],
                    'answer'     => $cleanAnswer,
                    'post_type'  => $validated['post_type'],
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
            
            DB::table('post_faq')->insert($faqsToInsert);
            DB::commit();
            
            return back()->with('success', count($faqsToInsert) . ' FAQ(s) added successfully');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error saving FAQs: ' . $e->getMessage());
        }
    }
    
    // Get existing FAQs for this page
    $faqList = DB::table('post_faq')
                ->where('page_id', $page_id)
                ->where('post_type', 'page')
                ->orderByDesc('id')
                ->get();
    
    // Get all pages for dropdown
    $pageList = DB::table('pages')->get();
    
    return view('backend.faq.create', compact('page', 'faqList', 'pageList'));
}

    
    public function faqView()
    {
        
        $records=DB::table('post_faq')->get();
        return view('backend.faq.view',["records"=>$records]);
    }
    
    public function faqUpdate(Request $request,$id)
    {
        
        $f=DB::table('post_faq')->where('id',$id)->first();
        
        if($request->isMethod('POST'))
        {
        $records=DB::table('post_faq')
                     ->where('id',$request->faqid)
                     ->update([
                       'question'=>$request->question,
                       'answer'=>$request->answer,
        ]);
        
        
           return back();
           
        }
        
        return view('backend.faq.edit',compact('f'));
     
    }
    
    
    
     public function faqDelete($id)
    {
        
        $f=DB::table('post_faq')->where('id',$id)->first();
        
        if($f)
        {
        $records=DB::table('post_faq')
                     
                    ->delete($id);
        
        
           return back();
           
        }
        
        return back();
     
    }
    
}


