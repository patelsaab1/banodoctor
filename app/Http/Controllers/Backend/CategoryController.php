<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {



            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100',
            ]);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('category'), $imageName);

            Category::create([
                "title" => $request->title,
                "content" => $request->content,
                "image" => $imageName,
                "icon" => $request->icon,
                "slug" => Str::slug($request->title),
            ]);

            session()->flash('success', 'created successfully');
            return back();
        }




        $records = Category::latest()->get();
        return view(
            'backend.category.create',
            compact('records')
        );
    }
    
        public function seo_meta_information(Request $request,$categoryid)
    {
        Category::where('id',$categoryid)->update(
            
             ['seo_meta_title'=>$request->seo_meta_title,
        'seo_meta_keywords'=>$request->seo_meta_keywords,
        'seo_meta_description'=>$request->seo_meta_description
        ]
            );
       
        
    }
}
