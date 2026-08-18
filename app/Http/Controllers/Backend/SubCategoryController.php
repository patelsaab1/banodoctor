<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class SubCategoryController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {



            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:100',
            ]);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('subcategory'), $imageName);

            Subcategory::create([
                "category_id" => $request->category_id,
                "title" => $request->title,
                "content" => $request->content,
                "image" => $imageName,
                "icon" => $request->icon,
                "slug" => Str::slug($request->title),
            ]);

            session()->flash('success', 'created successfully');
            return back();
        }



        $category = Category::get();
        $records = Subcategory::latest()->get();
        return view(
            'backend.subcategory.create',
            compact('records', 'category')
        );
    }
    
    
    public function update(Request $request, $id)
    {
        
        $record = Subcategory::where('id',$id)->first();
        
        if($request->isMethod('post'))
        {
         $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:100',
            ]);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('subcategory'), $imageName);
            
            
              Subcategory::where('id',$id)->update(['image'=>$imageName]);
              
             return redirect()->back();
        }
        
        return view(
            'backend.subcategory.edit',
            compact('record')
        );
    }
    
    
    
        public function seo_meta_information(Request $request,$subcategoryid)
    {
        
        $seo=Subcategory::where('id',$subcategoryid)->first();
       
       return view('backend.subcategory.seo',compact('seo'));
       
        Subcategory::where('id',$subcategoryid)->update(
            
             ['seo_meta_title'=>$request->seo_meta_title,
        'seo_meta_keywords'=>$request->seo_meta_keywords,
        'seo_meta_description'=>$request->seo_meta_description
        ]
            );
       
        
    }
}
