<?php

// app/Http/Controllers/StudentEnquiryController.php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentEnquiryRequest;
use App\Models\StudentEnquiry;

class StudentEnquiryController extends Controller
{
    public function create()
    {
        return view('enquiries.create');
    }

    public function store(StoreStudentEnquiryRequest $request)
    {
        $validated = $request->validated();

        // dd($validated);
        
        // Process checkbox arrays
        $validated['study_destinations'] = $request->input('study_destinations', []);
        $validated['source_info'] = $request->input('source_info', []);
        
        StudentEnquiry::create($validated);
        
        return redirect()->route('enquiries.create')
            ->with('success', 'Enquiry submitted successfully!');
    }
}