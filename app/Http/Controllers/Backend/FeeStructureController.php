<?php

namespace App\Http\Controllers\Backend;
use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FeeStructureController extends Controller
{
   
   
    public function create(Request $request)
    {
        
        $pages=Page::orderBy('title','asc')->get();
        $country=DB::table('country')->get();
        $courses=DB::table('subcategories')->get();
   
   if($request->isMethod('post'))   
   {
$data=[
    "page_id"=>$request->page_id,
       "country"=>$request->country,
       "state"=>$request->state,
       "table_name"=>$request->table_name,
       "course"=>$request->course,
       "table_post"=>$request->table_post
     ];
     
     DB::table('fee_structure')->insert($data);
     
     return redirect()->to(route('fee-structure-view'));
     
   } 
   
   
     return view('backend.feestructure.create',compact('pages','country','courses'));
     
     
    }
    
    
    
     public function edit(Request $request,$feeid)
    {
        
        $fee=DB::table('fee_structure')->where('id',$feeid)->first();
        
       $pages=Page::orderBy('title','asc')->get();
    $country=DB::table('country')->get();
    $courses=DB::table('subcategories')->get();
   
   if($request->isMethod('post'))   
   {
    $data=[
        "page_id"=>$request->page_id,
       "country"=>$request->country,
       "state"=>$request->state,
       "table_name"=>$request->table_name,
       "course"=>$request->course,
       "table_post"=>$request->table_post
     ];
     
     DB::table('fee_structure')->where('id',$feeid)->update($data);
     
     return redirect()->to(route('fee-structure-view'));
     
   } 
   
   
     return view('backend.feestructure.edit',compact('pages','country','courses','fee'));
     
     
    }
    
    
    
    
    public function view()
    {
        
        $records=DB::table('fee_structure')
        ->orderBy('course','desc')->get();
        
        return view('backend.feestructure.view',compact('records'));
    }
    
    
    public function tableView($feeid)
    {
        $fee=DB::table('fee_structure')->where('id',$feeid)->first();
        return view('backend.feestructure.single',compact('fee'));
        
    }
}
