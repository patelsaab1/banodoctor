<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ReviewController extends Controller
{
    public function create(Request $request)
    {
        
        
        
       


 if ($request->isMethod('post')) {



            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
           
           if(!empty($request->image))
           {
               $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('review'), $imageName);
           }
            else
            {
                $imageName="";
            }

            DB::table('review')->insert([
                "name" => $request->name,
                "rating"=>$request->rating,
                "image" => $imageName,
                "review"=>$request->review,
         
               
            ]);

            session()->flash('success', 'Review Post been created successfully');
            return redirect()->route('review-view');
        }
        return view('backend.review.create');
    }
    
    public function edit(Request $request,$reviewid)
    {
        return view('backend.review.edit');
    }
    
    
  
    
    public function view()
    {
         
         $records=DB::table('review')->latest()->get();
         return view('backend.review.view',compact('records'));
    }
}
