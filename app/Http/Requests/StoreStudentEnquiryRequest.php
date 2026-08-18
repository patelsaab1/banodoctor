<?php

// app/Http/Requests/StoreStudentEnquiryRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentEnquiryRequest extends FormRequest
{
    public function rules()
    {
        return [
            // Student Personal Details
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'father_spouse_name' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'aadhar_id' => 'required|string|max:20',
            'sex' => 'required|in:Male,Female,Other',
            'category' => 'required|in:GEN,OBC,SC,ST,EWS',
            'course_interested' => 'required|string|max:100',
            
            // Academic Details
            'x_std_percentage' => 'required|numeric|between:0,100',
            'xi_std_percentage' => 'required|numeric|between:0,100',
            'neet_score' => 'nullable|integer|min:0',
            'neet_exam_year' => 'nullable|digits:4|integer|min:1900|max:'.(date('Y')+1),
            
            // Other Details
            'passport_status' => 'required|boolean',
            'passport_number' => 'required_if:passport_status,1|nullable|string|max:20',
            'contact_number_1' => 'required|string|max:15',
            'contact_number_2' => 'nullable|string|max:15',
            'email' => 'required|email|max:100',
            
            // Family Details
            'father_spouse_occupation' => 'required|string|max:100',
            
            // Language Test
            'study_destinations' => 'nullable|array',
            'study_destinations.*' => 'in:UK,USA,NZ,CAN,AUS',
            'test_module' => 'nullable|string|max:50',
            'overall_score' => 'nullable|numeric|between:0,10',
            'listening_score' => 'nullable|numeric|between:0,10',
            'reading_score' => 'nullable|numeric|between:0,10',
            'writing_score' => 'nullable|numeric|between:0,10',
            'speaking_score' => 'nullable|numeric|between:0,10',
            
            // Address
            'address' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'state' => 'required|string|max:50',
            
            // Preferences
            'preference_1' => 'required|string|max:100',
            'preference_2' => 'required|string|max:100',
            'preference_3' => 'required|string|max:100',
            'preference_4' => 'required|string|max:100',
            
            // Source
            'source_info' => 'required|array|min:1',
            'source_info.*' => 'in:Newspaper,Calls,Social Media,Any Reference'
        ];
    }
}