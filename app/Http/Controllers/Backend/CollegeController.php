<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Backend\CategoryController;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\College;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Auth;

class CollegeController extends Controller
{
    
    
    
    public function workHistory()
    {
        $result=DB::table('activity_table')->orderBy('id','desc')->get();
        
        return view('backend.work.history',compact('result'));
        
    }
    public function create(Request $request)
    {
       
        if ($request->isMethod('post')) {


$imageName="";
$cardimageName="";

            $request->validate([
                'name'=>'required|unique:colleges',
              
            ]);


            College::create([
                "name" => $request->name,
                "slug" => Str::slug($request->name),
            ]);

            session()->flash('success', 'College has been created successfully');
            
            
             $this->activity_history(Auth::user()->email,$request->name.'College has been created successfully');
             
             
            return redirect()->route('college-view');
        }

   
       return view('backend.college.create');
    }
    
    
 

     
public function view(Request $request)
{
    $countryList = DB::table('country')->get();
    $stateList = DB::table('states')->get();

    $query = College::query()->select('colleges.*')
        ->addSelect(DB::raw('(SELECT COUNT(*) FROM post_faq WHERE post_faq.page_id = colleges.id AND post_type="college") AS faqCount'));

    if ($request->has('countryName') && $request->countryName != '') {
        $query->where('country', $request->countryName);
    }

    if ($request->has('stateName') && $request->stateName != '') {
        $query->where('state', $request->stateName);
    }

    $records = $query->latest()->get();

    return view('backend.college.view', compact('records', 'stateList', 'countryList'));
}




    
    public function edit(Request $request, $collegeid) {
    $college = College::findOrFail($collegeid);
    $section = $request->query('section');

    if ($request->isMethod('post') && $section) {
        $data = [];

        switch ($section) {
            case 'basic':
                $data = $request->only(['name','title', 'subtitle', 'short_description']);
                break;
            case 'overview':
                $data = $request->only(['overview']);
                break;
            case 'courses':
                $data = $request->only(['courses']);
                break;
            case 'admission_process':
                $data = $request->only(['admission_process']);
                break;
            case 'documents':
                $data = $request->only(['documents']);
                break;
            case 'fee_structure':
                $data = $request->only(['fee_structure']);
                break;
            case 'cutoff':
                $data = $request->only(['cutoff']);
                break;
            case 'why_banodoctor':
                $data = $request->only(['why_banodoctor']);
                break;
            case 'content':
                $data = $request->only(['content']);
                break;
            case 'location':
                $data = $request->only([
                    'country','state','city','address',
                    'fee_state_quota','fee_nri_qouta',
                    'fee_management_quota','college_type','category'
                ]);
                break;

            case 'media':
                // Update YouTube Embed
                $data['youtube_video_embed'] = $request->youtube_video_embed;

                // Hero Section Image
                if ($request->hasFile('hero_section_image')) {
                    $file = $request->file('hero_section_image');
                    $filename = time().'_hero.'.$file->extension();
                    $file->move(public_path('college'), $filename);
                    $data['hero_section_image'] = $filename;

                    if ($college->hero_section_image && File::exists(public_path('college/'.$college->hero_section_image))) {
                        File::delete(public_path('college/'.$college->hero_section_image));
                    }
                }

                // Card Image
                if ($request->hasFile('card_image')) {
                    $file = $request->file('card_image');
                    $filename = time().'_card.'.$file->extension();
                    $file->move(public_path('college'), $filename);
                    $data['card_image'] = $filename;

                    if ($college->card_image && File::exists(public_path('college/'.$college->card_image))) {
                        File::delete(public_path('college/'.$college->card_image));
                    }
                }

                // Web Page Image
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $filename = time().'_image.'.$file->extension();
                    $file->move(public_path('college'), $filename);
                    $data['image'] = $filename;

                    if ($college->image && File::exists(public_path('college/'.$college->image))) {
                        File::delete(public_path('college/'.$college->image));
                    }
                }
                break;

            case 'seo':
                $data = $request->only([
                    'seo_meta_title',
                    'seo_meta_keywords',
                    'seo_meta_description',
                    'slug'
                ]);

                session()->flash('success', 'SEO meta information updated successfully.');
                break;
        }

        // ✅ Sanitize all text fields to remove inline CSS
        foreach ($data as $key => $value) {
            if (is_string($value)) {
                $data[$key] = preg_replace('/\s*style=("|\')(.*?)\1/', '', $value);
            }
        }

        if (!empty($data)) {
            College::where('id', $collegeid)->update($data);
            session()->flash('success', ucfirst($section) . ' section updated successfully.');
        }

        return redirect()->back()->withFragment($section);
    }

    $country = DB::table('country')->get();
    $states = DB::table('states')->get();

    return view('backend.college.edit', compact('college', 'country', 'states'));
}

    
        public function seo_meta_information(Request $request,$collegeid)
    {
        
        
          if($request->isMethod('post'))
        {
            College::where('id',$collegeid)->update(
            
             ['seo_meta_title'=>$request->seo_meta_title,
        'seo_meta_keywords'=>$request->seo_meta_keywords,
        'seo_meta_description'=>$request->seo_meta_description,
        'slug'=>$request->slug
        ]
            );
            
                session()->flash('success','Seo Information has been updated successfully');
                
                
                
                $this->activity_history(Auth::user()->email,$request->seo_meta_title.' College SEO Informationhas been uodated successfully');
                
                
                
            return redirect()->back();
        }
        
         $seo=College::where('id',$collegeid)->first();
        return view('backend.college.seo',compact('seo'));
       
        
    }
    
    
    public function indexingUpdate($collegeid,Request $request)
    {
        College::where('id',$collegeid)->update(["page_indexing_status"=>$request->page_indexing_status] );
        
        return redirect()->back();
    }
    
    
    
    
    public function StateWiseListCollege(Request $request)
    {
        
        
         $tables=DB::table('states')->where('table_name','!=',NULL)->get();
        $pages=DB::table('pages')->get();
        
        if($request->isMethod('post'))
        {
            
            DB::table('states')->where("id",$request->id)->update(["page_id"=>$request->page_id]);
             return redirect()->back();
        }
        
       
         return view('backend.college.table',compact('tables','pages'));
        
    }
    
    
    public function UpdateCollegeUrl($table, Request $request)
    
    {
          $table=DB::table('states')->where('id',$table)->first();
          $records=DB::table($table->table_name)->get();
          $state=$table->name;
          
          $colleges=DB::table('colleges')->where('state',$state)->get();
          
          
           if($request->isMethod('post'))
        {
            
            DB::table($table->table_name)->where("id",$request->id)->update(["college_id"=>$request->college_id]);
             return redirect()->back();
        }
          
          
          return view('backend.college.colleges',compact('records','colleges'),["state"=>$state]);
         
    }
    
    
     public function fetchState(Request $request)
    {
        $country=DB::table('country')->where('name',$request->country)->first();
        
        $data['states'] = DB::table('states')->where("country_id",$country->id)->get(["name", "id"]);
        return response()->json($data);
    }
    
    
    
    //  public function faq(Request $request,$page_id)
    // {
        
    //     $pageList=DB::table('colleges')->where('id',$page_id)->get();
        
    //     // if($request->isMethod('post'))
    //     // {
            
            
    //     //     DB::table('post_faq')->insert(
    //     //         ["page_id"=>$page_id,
    //     //             "question"=>$request->question,
    //     //         "answer"=>$request->answer,
    //     //          "post_type"=>"college",
    //     //         ]);
                
    //     //         session()->flash('success','faq added successfully');
                
                
    //     //         $this->activity_history(Auth::user()->email,$request->question.' College Faq has been created successfully');
                
                
    //     //         return back();
    //     // }
        
        
        
    //      if ($request->isMethod('post')) {
    //     // Validate the request
    //     $validated = $request->validate([
    //         'page_id' => 'required',
    //         'post_type' => 'required',
    //         'faqs' => 'required|array|min:1',
    //         'faqs.*.question' => 'required',
    //         'faqs.*.answer' => 'required',
    //     ]);

    //     try {
    //         DB::beginTransaction();
            
    //         $faqsToInsert = [];
    //         $now = now();
            
    //         foreach ($validated['faqs'] as $faq) {
    //             $faqsToInsert[] = [
    //                 'page_id' => $validated['page_id'],
    //                 'question' => $faq['question'],
    //                 'answer' => $faq['answer'],
    //                 'post_type' => 'college',
    //                 'created_at' => $now,
    //                 'updated_at' => $now
    //             ];
    //         }
            
    //         DB::table('post_faq')->insert($faqsToInsert);
    //         DB::commit();
            
    //         return back()->with('success', count($faqsToInsert) . ' FAQ(s) added successfully');
            
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         return back()->with('error', 'Error saving FAQs: ' . $e->getMessage());
    //     }
    // }
        
    //     return view('backend.faq.college-faq-create',
    //     [
    //         'pageList'=>$pageList,
    //         'faqList'=>DB::table('post_faq')->where('page_id',$page_id)->where('post_type','college')->orderBy("id","desc")->get()
    //         ]);
    // }  
    
    
    
    public function faq(Request $request, $page_id)
{
    $pageList = DB::table('colleges')->where('id', $page_id)->get();

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
                // ✅ Remove inline CSS from answer
                $cleanAnswer = preg_replace('/\s*style=("|\')(.*?)\1/', '', $faq['answer']);

                $faqsToInsert[] = [
                    'page_id'    => $validated['page_id'],
                    'question'   => $faq['question'],
                    'answer'     => $cleanAnswer,
                    'post_type'  => 'college',
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

    return view('backend.faq.college-faq-create', [
        'pageList' => $pageList,
        'faqList'  => DB::table('post_faq')
                        ->where('page_id', $page_id)
                        ->where('post_type', 'college')
                        ->orderBy("id", "desc")
                        ->get()
    ]);
}

    
}
