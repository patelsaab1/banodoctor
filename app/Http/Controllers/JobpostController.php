<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobpost;
use Illuminate\Support\Str;
class JobpostController extends Controller
{
    public function create(Request $request)
    {
        
        
        
       

 if ($request->isMethod('post')) {



            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100',
            ]);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('job'), $imageName);

            Jobpost::create([
                "title" => $request->title,
                "content"=>$request->content,
                "image" => $imageName,
              
         
                "slug" => Str::slug($request->title),
            ]);

            session()->flash('success', 'Job Post been created successfully');
            return redirect()->route('job-view');
        }
        return view('backend.jobpost.create');
    }
    
    public function edit(Request $request,$jobid)
    {
        return view('backend.jobpost.edit');
    }
    
    
    public function seo_meta_information(Request $request,$jobid)
    {
        
        
        if($request->isMethod('post'))
        {
        Jobpost::where('id',$jobid)->update(
            
             ['seo_meta_title'=>$request->seo_meta_title,
        'seo_meta_keywords'=>$request->seo_meta_keywords,
        'seo_meta_description'=>$request->seo_meta_description
        ]
            );
            
            
            session()->flash('success','Seo Information has been updated successfully');
            return redirect()->back();
        }
        
        
        $seo=Jobpost::where('id',$jobid)->first();
        return view('backend.jobpost.seo',compact('seo'));
        
    }
    
    public function view()
    {
         
         $records=Jobpost::latest()->paginate(10);
         return view('backend.jobpost.view',compact('records'));
    }
}
