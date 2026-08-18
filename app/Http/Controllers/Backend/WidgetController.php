<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class WidgetController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {



            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('widget'), $imageName);

            Widget::create([
                "title" => $request->title,
                "content" => $request->content,
                "image" => $imageName,
                "icon" => $request->icon,
                "widget_category"=>$request->widget_category,
                "slug"                 => Str::slug($request->title),
            ]);

            session()->flash('success', 'created successfully');
            return back();
        }




        $records = Widget::latest()->get();
        return view(
            'backend.widget.create',
            compact('records')
        );
    }
    
    
        public function update(Request $request,$widgetId)
    {
        
         $records = Widget::where('id',$widgetId)->first();
        
        if ($request->isMethod('post')) {

          if(!empty($request->file('image')))
          {
                $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('widget'), $imageName);

            Widget::where('id',$widgetId)->update([
                
                "image" => $imageName,
                
               
            ]);
          }
          
          
          
            if(!empty($request->file('page_image')))
          {
                $request->validate([
                'page_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $imageName = time() . '.' . $request->page_image->extension();

            $request->page_image->move(public_path('widget/page_image'), $imageName);

            Widget::where('id',$widgetId)->update([
                
                "page_image" => $imageName,
                
               
            ]);
          }
          
          
          if(empty( $records->slug))
          {
              Widget::where('id',$widgetId)->update([
            
            "slug"=> Str::slug($request->title),
                
               
            ]);
            
            
           
          }

        if(!empty($request->content))
          {
       
         Widget::where('id',$widgetId)->update([
                
                "content" => $request->content,
                
               
            ]);
          }
          

            session()->flash('success', 'Image Updated successfully');
            return back();
        }


        

       
        return view(
            'backend.widget.edit',
            ["widget"=>$records]
        );
    }
    
           public function updateUrl(Request $request,$widgetId)
    {
        if ($request->isMethod('post')) {



           
           
            Widget::where('id',$widgetId)->update([
                
                "slug" => $request->slug,
                
               
            ]);

            session()->flash('success', 'Slug has been updated successfully');
            return back();
        }


        

        $records = Widget::where('id',$widgetId)->first();
        return view(
            'backend.widget.edit',
            ["widget"=>$records]
        );
    }
    
     
    
        public function seo_meta_information(Request $request,$widgetid)
    {
       if($request->isMethod('post'))
        {
       
        Widget::where('id',$widgetid)->update(
            
             ['seo_meta_title'=>$request->seo_meta_title,
        'seo_meta_keywords'=>$request->seo_meta_keywords,
        'seo_meta_description'=>$request->seo_meta_description
        ]
            );
            
                session()->flash('success','Seo Information has been updated successfully');
            return redirect()->back();
        }
        
        
         $seo=Widget::where('id',$widgetid)->first();
        return view('backend.widget.seo',compact('seo'));
       
        
    }
}
