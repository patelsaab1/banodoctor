<?php

namespace App\Http\Controllers;

use App\Models\EnquiryDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // 
use Illuminate\Validation\Rule; 

class EnquiryController extends Controller
{
    /**
     * Check if enquiry session already exists
     */
    public function checkSession()
    {
        return response()->json([
            'session_exists' => session()->has('enquiry_submitted')
        ]);
    }

    /**
     * Handle enquiry form submission
     */
    public function submit(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'mobile'       => 'required|digits:10',
            'neet_given'   => 'required|in:yes,no',
            'neet_score'   => 'nullable|numeric|min:0|max:720',
            'file_url'     => 'nullable'
        ]);

        // Convert neet_given to boolean and manage score accordingly
        $neetGiven = $validated['neet_given'] === 'yes';

        $enquiry = EnquiryDownload::create([
            'name'        => $validated['name'],
            'mobile'      => $validated['mobile'],
            'neet_given'  => $neetGiven,
            'neet_score'  => $neetGiven ? $validated['neet_score'] : null,
            'file_url'    => $validated['file_url'] ?? null
        ]);

        // Set session to avoid duplicate submission
        session(['enquiry_submitted' => true]);

        return response()->json([
            'success'   => true,
            'message'   => 'Enquiry submitted successfully.',
            'file_url'  => $enquiry->file_url
        ]);
    }
    
    
    
public function FeeEnquiryStore(Request $request)
{
    // Validate the request
    $validator = Validator::make($request->all(), [
        'name'       => 'required|string|max:255',
        'mobile'     => 'required|digits:10',
        'neet_given' => 'required|in:yes,no',
        'neet_score' => 'nullable|numeric|min:0|max:720',
        'page_url'   => 'required|url',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    try {
        // Prepare data for creation
        $neetGiven = $request->neet_given === 'yes';
        $neetScore = $neetGiven ? $request->neet_score : null;

        // Create new enquiry
        $enquiry = EnquiryDownload::create([
            'name'        => $request->name,
            'mobile'      => $request->mobile,
            'neet_given'  => $neetGiven,
            'neet_score'  => $neetScore,
            'file_url'   => $request->page_url,
          
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your enquiry. The full fee structure is now available.',
            'data'    => $enquiry,
            'redirect' => false // Add this if you need to handle redirects in JS
        ]);

    } catch (\Exception $e) {
        \Log::error('Fee Enquiry Submission Error: ' . $e->getMessage());
        
        return response()->json([
            'success' => false,
            'message' => 'Failed to submit enquiry. Please try again later.',
            'error'   => env('APP_DEBUG') ? $e->getMessage() : null
        ], 500);
    }
}
}





