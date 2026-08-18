<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function view(Request $request)
    {
       

      
        $records = Contact::latest()->get();
        return view(
            'backend.enquiry.view',
            compact('records')
        );
    }
    
    
    public function Enquiry()
    {
        
         $records =DB::table('enquiry_downloads')->latest()->get();
        return view(
            'backend.enquiry.course',
            compact('records')
        );
        
        
    }
}
