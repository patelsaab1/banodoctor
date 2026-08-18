<!-- resources/views/enquiries/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BanoDoctor - Student Enquiry Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header {
            background: linear-gradient(135deg, #1a237e, #283593);
            color: white;
            padding: 20px 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-top: 30px;
            margin-bottom: 40px;
        }
        .section-title {
            color: #1a237e;
            border-left: 5px solid #3949ab;
            padding-left: 15px;
            margin: 30px 0 20px;
            font-weight: 600;
        }
        .form-label {
            font-weight: 600;
            color: #444;
        }
        .required:after {
            content: " *";
            color: #e53935;
        }
        .btn-submit {
            background: linear-gradient(135deg, #1a237e, #3949ab);
            border: none;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
            margin-top: 20px;
        }
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(26, 35, 126, 0.4);
        }
        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 10px;
        }
        .logo {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .certification-badge {
            background: #ffc107;
            color: #333;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin: 5px 0;
        }
        .form-check-label {
            font-weight: 500;
        }
        .footer {
            background: #1a237e;
            color: white;
            padding: 30px 0 10px;
            margin-top: 40px;
            border-radius: 20px 20px 0 0;
        }
        .address-box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
        }
        .error-message {
            color: #e53935;
            font-size: 14px;
            margin-top: 5px;
        }
        .form-control:focus, .form-select:focus {
            border-color: #3949ab;
            box-shadow: 0 0 0 0.25rem rgba(57, 73, 171, 0.25);
        }
        .alert-success {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            border: none;
            border-left: 5px solid #28a745;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.2);
            padding: 20px;
        }
        .alert-success .btn-close {
            position: absolute;
            top: 15px;
            right: 15px;
        }
        .alert-success h4 {
            color: #155724;
            font-weight: 700;
        }
        .alert-success p {
            color: #0f5132;
            font-size: 16px;
        }
        .alert-success .badge {
            font-size: 16px;
            padding: 6px 12px;
            border-radius: 20px;
        }
        .alert-success .btn-outline-success {
            border-color: #28a745;
            color: #28a745;
        }
        .alert-success .btn-outline-success:hover {
            background-color: #28a745;
            color: white;
        }
        .alert-success .btn-outline-primary {
            border-color: #007bff;
            color: #007bff;
        }
        .alert-success .btn-outline-primary:hover {
            background-color: #007bff;
            color: white;
        }
        .field-error {
            border-color: #e53935 !important;
        }
        .field-error:focus {
            box-shadow: 0 0 0 0.25rem rgba(229, 57, 53, 0.25) !important;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="logo-container">
                <div class="logo">
                  <img src="{{ asset('Bano-Doctor-Logo.png') }}" width="100">
                </div>
                <div>
                    <h1>Bano Doctor Education Consultancy</h1>
                    <div class="certification-badge">
                        <i class="fas fa-certificate me-2"></i>ISO 1900 : 2000 Certified Consultancy
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="d-flex align-items-center">
                <i class="fas fa-check-circle fa-2x me-3"></i>
                <div>
                    <h4 class="alert-heading mb-1">Success!</h4>
                    <p class="mb-0">{{ session('success') }}</p>
                    @if(session('enquiry_number'))
                    <p class="mt-2 mb-0">
                        <strong>Enquiry Number:</strong> 
                        <span class="badge bg-primary">{{ session('enquiry_number') }}</span>
                    </p>
                    <p class="mt-2">
                        We'll contact you within 24 hours at the provided contact information.
                    </p>
                    <div class="mt-3">
                        <button class="btn btn-sm btn-outline-success me-2" onclick="window.print()">
                            <i class="fas fa-print me-1"></i> Print Confirmation
                        </button>
                        <button class="btn btn-sm btn-outline-primary" onclick="resetForm()">
                            <i class="fas fa-plus me-1"></i> New Enquiry
                        </button>
                    </div>
                    @endif
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="form-container">
            <h2 class="text-center mb-4">Student Inquiry Form</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Validation Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('enquiries.store') }}" id="enquiryForm">
                @csrf
                
                <!-- Section 1: Student Personal Details -->
                <h3 class="section-title">1) Student Personal Details</h3>
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">First Name</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') field-error @enderror" 
                               placeholder="Enter first name" value="{{ old('first_name') }}" required>
                        @error('first_name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Last Name</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') field-error @enderror" 
                               placeholder="Enter last name" value="{{ old('last_name') }}" required>
                        @error('last_name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label required">Father / Spouse Name</label>
                        <input type="text" name="father_spouse_name" class="form-control @error('father_spouse_name') field-error @enderror" 
                               placeholder="Enter father or spouse name" value="{{ old('father_spouse_name') }}" required>
                        @error('father_spouse_name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') field-error @enderror" 
                               value="{{ old('date_of_birth') }}" required>
                        @error('date_of_birth')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Aadhar / ID Number</label>
                        <input type="text" name="aadhar_id" class="form-control @error('aadhar_id') field-error @enderror" 
                               placeholder="Enter Aadhar or ID number" value="{{ old('aadhar_id') }}" required>
                        @error('aadhar_id')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Sex</label>
                        <div class="d-flex gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" value="Male" id="male" 
                                       @checked(old('sex') == 'Male') required>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" value="Female" id="female"
                                       @checked(old('sex') == 'Female')>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" value="Other" id="other"
                                       @checked(old('sex') == 'Other')>
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>
                        @error('sex')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Category</label>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" value="GEN" id="gen" 
                                       @checked(old('category') == 'GEN') required>
                                <label class="form-check-label" for="gen">GEN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" value="OBC" id="obc"
                                       @checked(old('category') == 'OBC')>
                                <label class="form-check-label" for="obc">OBC</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" value="SC" id="sc"
                                       @checked(old('category') == 'SC')>
                                <label class="form-check-label" for="sc">SC</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" value="ST" id="st"
                                       @checked(old('category') == 'ST')>
                                <label class="form-check-label" for="st">ST</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" value="EWS" id="ews"
                                       @checked(old('category') == 'EWS')>
                                <label class="form-check-label" for="ews">EWS</label>
                            </div>
                        </div>
                        @error('category')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label required">Course Interested In</label>
                        <input type="text" name="course_interested" class="form-control @error('course_interested') field-error @enderror" 
                               placeholder="Enter course you are interested in" value="{{ old('course_interested') }}" required>
                        @error('course_interested')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Section 2: Academic Details -->
                <h3 class="section-title">2) Academic Details</h3>
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">X<sup>th</sup> Standard (%)</label>
                        <input type="number" name="x_std_percentage" class="form-control @error('x_std_percentage') field-error @enderror" 
                               placeholder="Enter percentage" min="0" max="100" step="0.01" 
                               value="{{ old('x_std_percentage') }}" required>
                        @error('x_std_percentage')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">XI<sup>th</sup> Standard (%)</label>
                        <input type="number" name="xi_std_percentage" class="form-control @error('xi_std_percentage') field-error @enderror" 
                               placeholder="Enter percentage" min="0" max="100" step="0.01" 
                               value="{{ old('xi_std_percentage') }}" required>
                        @error('xi_std_percentage')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">NEET (UG / PG) Score</label>
                        <input type="number" name="neet_score" class="form-control @error('neet_score') field-error @enderror" 
                               placeholder="Enter NEET score" value="{{ old('neet_score') }}">
                        @error('neet_score')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Examination Year</label>
                        <input type="number" name="neet_exam_year" class="form-control @error('neet_exam_year') field-error @enderror" 
                               placeholder="YYYY" min="1900" max="{{ date('Y') + 1 }}" 
                               value="{{ old('neet_exam_year') }}">
                        @error('neet_exam_year')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Section 3: Other Details -->
                <h3 class="section-title">3) Other Details</h3>
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Passport Status</label>
                        <div class="d-flex gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="passport_status" value="1" id="passport_yes" 
                                       @checked(old('passport_status') == '1') required>
                                <label class="form-check-label" for="passport_yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="passport_status" value="0" id="passport_no"
                                       @checked(old('passport_status') == '0')>
                                <label class="form-check-label" for="passport_no">No</label>
                            </div>
                        </div>
                        @error('passport_status')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Passport Number</label>
                        <input type="text" name="passport_number" id="passport_number" 
                               class="form-control @error('passport_number') field-error @enderror" 
                               placeholder="Enter passport number" value="{{ old('passport_number') }}"
                               @if(old('passport_status') == '0') disabled @endif>
                        @error('passport_number')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Contact Number 1</label>
                        <input type="tel" name="contact_number_1" class="form-control @error('contact_number_1') field-error @enderror" 
                               placeholder="Enter primary contact number" value="{{ old('contact_number_1') }}" required>
                        @error('contact_number_1')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contact Number 2</label>
                        <input type="tel" name="contact_number_2" class="form-control @error('contact_number_2') field-error @enderror" 
                               placeholder="Enter secondary contact number" value="{{ old('contact_number_2') }}">
                        @error('contact_number_2')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label required">Email ID</label>
                        <input type="email" name="email" class="form-control @error('email') field-error @enderror" 
                               placeholder="Enter your email address" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Section 4: Father/Spouse Occupation -->
                <h3 class="section-title">4) Father / Spouse Occupation</h3>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <input type="text" name="father_spouse_occupation" class="form-control @error('father_spouse_occupation') field-error @enderror" 
                               placeholder="Enter occupation" value="{{ old('father_spouse_occupation') }}" required>
                        @error('father_spouse_occupation')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Section 5: IELTS/TOEFL/PTE -->
                <h3 class="section-title">5) IELTS/TOEFL/PTE (If you want to study in)</h3>
                <div class="row mb-4">
                    <div class="col-12 mb-3">
                        <label class="form-label">Countries Interested</label>
                        <div class="d-flex flex-wrap gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="study_destinations[]" value="UK" id="uk"
                                       @checked(is_array(old('study_destinations')) && in_array('UK', old('study_destinations')))>
                                <label class="form-check-label" for="uk">UK</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="study_destinations[]" value="USA" id="usa"
                                       @checked(is_array(old('study_destinations')) && in_array('USA', old('study_destinations')))>
                                <label class="form-check-label" for="usa">USA</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="study_destinations[]" value="NZ" id="nz"
                                       @checked(is_array(old('study_destinations')) && in_array('NZ', old('study_destinations')))>
                                <label class="form-check-label" for="nz">NZ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="study_destinations[]" value="CAN" id="can"
                                       @checked(is_array(old('study_destinations')) && in_array('CAN', old('study_destinations')))>
                                <label class="form-check-label" for="can">CAN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="study_destinations[]" value="AUS" id="aus"
                                       @checked(is_array(old('study_destinations')) && in_array('AUS', old('study_destinations')))>
                                <label class="form-check-label" for="aus">AUS</label>
                            </div>
                        </div>
                        @error('study_destinations')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Module</label>
                        <input type="text" name="test_module" class="form-control @error('test_module') field-error @enderror" 
                               placeholder="e.g. Academic, General" value="{{ old('test_module') }}">
                        @error('test_module')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Overall Score</label>
                        <input type="number" name="overall_score" class="form-control @error('overall_score') field-error @enderror" 
                               placeholder="Overall score" min="0" max="10" step="0.1" value="{{ old('overall_score') }}">
                        @error('overall_score')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Listening</label>
                        <input type="number" name="listening_score" class="form-control @error('listening_score') field-error @enderror" 
                               placeholder="Score" min="0" max="10" step="0.1" value="{{ old('listening_score') }}">
                        @error('listening_score')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Reading</label>
                        <input type="number" name="reading_score" class="form-control @error('reading_score') field-error @enderror" 
                               placeholder="Score" min="0" max="10" step="0.1" value="{{ old('reading_score') }}">
                        @error('reading_score')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Writing</label>
                        <input type="number" name="writing_score" class="form-control @error('writing_score') field-error @enderror" 
                               placeholder="Score" min="0" max="10" step="0.1" value="{{ old('writing_score') }}">
                        @error('writing_score')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Speaking</label>
                        <input type="number" name="speaking_score" class="form-control @error('speaking_score') field-error @enderror" 
                               placeholder="Score" min="0" max="10" step="0.1" value="{{ old('speaking_score') }}">
                        @error('speaking_score')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Section 6: Address -->
                <h3 class="section-title">6) Address</h3>
                <div class="row mb-4">
                    <div class="col-md-12 mb-3">
                        <label class="form-label required">Address</label>
                        <textarea name="address" class="form-control @error('address') field-error @enderror" 
                                  rows="3" placeholder="Enter your full address" required>{{ old('address') }}</textarea>
                        @error('address')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Zip Code</label>
                        <input type="text" name="zip_code" class="form-control @error('zip_code') field-error @enderror" 
                               placeholder="Enter zip code" value="{{ old('zip_code') }}" required>
                        @error('zip_code')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">State</label>
                        <input type="text" name="state" class="form-control @error('state') field-error @enderror" 
                               placeholder="Enter state" value="{{ old('state') }}" required>
                        @error('state')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Section 7: College/University Preference -->
                <h3 class="section-title">7) College / University Preference</h3>
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Preference 1</label>
                        <input type="text" name="preference_1" class="form-control @error('preference_1') field-error @enderror" 
                               placeholder="First preference" value="{{ old('preference_1') }}" required>
                        @error('preference_1')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Preference 2</label>
                        <input type="text" name="preference_2" class="form-control @error('preference_2') field-error @enderror" 
                               placeholder="Second preference" value="{{ old('preference_2') }}" required>
                        @error('preference_2')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Preference 3</label>
                        <input type="text" name="preference_3" class="form-control @error('preference_3') field-error @enderror" 
                               placeholder="Third preference" value="{{ old('preference_3') }}" required>
                        @error('preference_3')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Preference 4</label>
                        <input type="text" name="preference_4" class="form-control @error('preference_4') field-error @enderror" 
                               placeholder="Fourth preference" value="{{ old('preference_4') }}" required>
                        @error('preference_4')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Section 8: How Did You Know -->
                <h3 class="section-title">8) How Did You Know Bano Doctor</h3>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex flex-wrap gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="source_info[]" value="Newspaper" id="newspaper"
                                       @checked(is_array(old('source_info')) && in_array('Newspaper', old('source_info')))>
                                <label class="form-check-label" for="newspaper">Newspaper</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="source_info[]" value="Calls" id="calls"
                                       @checked(is_array(old('source_info')) && in_array('Calls', old('source_info')))>
                                <label class="form-check-label" for="calls">Calls</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="source_info[]" value="Social Media" id="social"
                                       @checked(is_array(old('source_info')) && in_array('Social Media', old('source_info')))>
                                <label class="form-check-label" for="social">Social Media</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="source_info[]" value="Any Reference" id="reference"
                                       @checked(is_array(old('source_info')) && in_array('Any Reference', old('source_info')))>
                                <label class="form-check-label" for="reference">Any Reference</label>
                            </div>
                        </div>
                        @error('source_info')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-submit">
                    <i class="fas fa-paper-plane me-2"></i>Submit Enquiry
                </button>
            </form>
        </div>
    </div>
    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize passport status
        function updatePassportField() {
            const passportStatus = document.querySelector('input[name="passport_status"]:checked');
            const passportNumberField = document.getElementById('passport_number');
            
            if (passportStatus) {
                if (passportStatus.value === "0") {
                    passportNumberField.disabled = true;
                    passportNumberField.required = false;
                } else {
                    passportNumberField.disabled = false;
                    passportNumberField.required = true;
                }
            }
        }

        // Show/hide passport number field based on selection
        document.querySelectorAll('input[name="passport_status"]').forEach(radio => {
            radio.addEventListener('change', updatePassportField);
        });

        // Run on page load
        document.addEventListener('DOMContentLoaded', updatePassportField);
        
        // Initialize form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            let valid = true;
            
            // Clear previous errors
            document.querySelectorAll('.error-message').forEach(el => el.remove());
            document.querySelectorAll('.field-error').forEach(el => el.classList.remove('field-error'));
            
            // Check required fields
            document.querySelectorAll('[required]').forEach(field => {
                if (!field.value.trim()) {
                    valid = false;
                    field.classList.add('field-error');
                    const error = document.createElement('div');
                    error.className = 'error-message';
                    error.textContent = 'This field is required';
                    field.parentNode.appendChild(error);
                }
            });
            
            // Validate email format
            const emailField = document.querySelector('input[name="email"]');
            if (emailField && emailField.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value)) {
                    valid = false;
                    emailField.classList.add('field-error');
                    const error = document.createElement('div');
                    error.className = 'error-message';
                    error.textContent = 'Please enter a valid email address';
                    emailField.parentNode.appendChild(error);
                }
            }
            
            // Validate passport number if required
            const passportStatus = document.querySelector('input[name="passport_status"]:checked');
            const passportNumberField = document.getElementById('passport_number');
            if (passportStatus && passportStatus.value === "1" && !passportNumberField.value.trim()) {
                valid = false;
                passportNumberField.classList.add('field-error');
                const error = document.createElement('div');
                error.className = 'error-message';
                error.textContent = 'Passport number is required';
                passportNumberField.parentNode.appendChild(error);
            }
            
            if (!valid) {
                e.preventDefault();
            }
        });
        
        // Auto-dismiss success message after 10 seconds
        setTimeout(function() {
            const alert = document.querySelector('.alert.alert-success');
            if (alert) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 10000);
        
        // Reset form function
        function resetForm() {
            document.getElementById('enquiryForm').reset();
            updatePassportField();
            
            // Remove success message
            const successAlert = document.querySelector('.alert.alert-success');
            if (successAlert) {
                successAlert.remove();
            }
            
            // Scroll to top
            window.scrollTo(0, 0);
        }
    </script>
</body>
</html>