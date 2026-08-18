
<x-app-layout>
<div class="container py-3">
    
    
        <div class="d-flex flex-wrap align-items-center gap-2">

    <a href="{{ url('/college/'.$college->slug )}}" target="_blank" class="btn btn-info" title="Click here to view college information">
        Slug - {{ url('/college/'.$college->slug ) }}
    </a>

    <a href="{{ route('college-faq-create', $college->id) }}"  class="btn btn-warning">
        Add/View FAQ 
    </a>

    <a href="{{ route('college-edit', $college->id) }}" title="Click here to edit college content" class="btn btn-success">
        <i class="fa fa-cog text-success"></i> Update College
    </a>

    <a href="{{ route('college-edit-seo', $college->id) }}" title="Click here to edit SEO information" class="btn btn-primary">
        <i class="fa fa-pencil text-warning"></i> Update SEO
    </a>
    
    
    
      <a href="{{ route('college-view') }}" title="Click here to edit SEO information" class="btn btn-primary">
        <i class="fa fa-eye text-danger"></i>Go Back
    </a>
    
    

</div>



@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif



<ul class="nav nav-tabs mb-3" role="tablist">
    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#basic" role="tab">Basic Info</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#overview" role="tab">Overview</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#courses" role="tab">Courses</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#admission_process" role="tab">Admission</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#documents" role="tab">Documents</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#fee_structure" role="tab">Fee Structure</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#cutoff" role="tab">Cutoff</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#why_banodoctor" role="tab">Why Bano Doctor</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#content" role="tab">Main Content</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#location" role="tab">Location & Quota</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#media" role="tab">Images & Media</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#seo" role="tab">SEO</a></li>
</ul>

<div class="tab-content">

<div class="tab-pane fade show active" id="basic" role="tabpanel">
<form method="POST" action="{{ route('college-edit-update', ['collegeid' => $college->id, 'section' => 'basic']) }}">
@csrf

<label>College Name</label><input type="text" name="name" class="form-control" value="{{ $college->name }}">
<label>Page Heading</label><input type="text" name="title" class="form-control" value="{{ $college->title }}">
<label>Page Sub Heading</label><input type="text" name="subtitle" class="form-control" value="{{ $college->subtitle }}">
<label>Short Description</label><textarea name="short_description" class="form-control">{{ $college->short_description }}</textarea>
<button class="btn btn-primary mt-2">Save Basic Info</button>
</form>
</div>

@php
$tabs = [
    'overview' => 'overview',
    'overview' => 'overview',
    'courses' => 'courses',
    'admission_process' => 'admission_process',
    'documents' => 'documents',
    'fee_structure' => 'fee_structure',
    'cutoff' => 'cutoff',
    'why_banodoctor' => 'why_banodoctor',
    'content' => 'content'
];
@endphp

@foreach($tabs as $id => $field)
<div class="tab-pane fade" id="{{ $id }}" role="tabpanel">
<form method="POST" action="{{ route('college-edit-update', ['collegeid' => $college->id, 'section' => $field]) }}">
@csrf
<label>{{ ucwords(str_replace('_', ' ', $field)) }}</label>
<textarea class="form-control ckeditor" name="{{ $field }}">{{ $college->$field }}</textarea>
<button class="btn btn-primary mt-2">Save</button>
</form>
</div>
@endforeach

<div class="tab-pane fade" id="location" role="tabpanel">
<form method="POST" action="{{ route('college-edit-update', ['collegeid' => $college->id, 'section' => 'location']) }}">
@csrf
<!-- Add location related fields here -->


               <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Country</label>
                        <select name="country" id="country" class="form-control">
                            @foreach($country as $c)
                                <option value="{{ $c->name }}" {{ $c->name == $college->country ? 'selected' : '' }}>{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>State</label>
                        <select name="state" id="state" class="form-control">
                            @foreach($states as $state)
                                <option value="{{ $state->name }}" {{ $state->name == $college->state ? 'selected' : '' }}>{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" value="{{ $college->city }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $college->address }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Fee State Quota</label>
                        <input type="text" name="fee_state_quota" class="form-control" value="{{ $college->fee_state_quota }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Fee NRI Quota</label>
                        <input type="text" name="fee_nri_qouta" class="form-control" value="{{ $college->fee_nri_qouta }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Fee Management Quota</label>
                        <input type="text" name="fee_management_quota" class="form-control" value="{{ $college->fee_management_quota }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>College Type</label>
                        <select name="college_type" class="form-control">
                            <option {{ $college->college_type == 'Government' ? 'selected' : '' }}>Government</option>
                            <option {{ $college->college_type == 'Private' ? 'selected' : '' }}>Private</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Category</label>
                        <select name="category" class="form-control">
                            <option {{ $college->category == 'Medical College' ? 'selected' : '' }}>Medical College</option>
                            <option {{ $college->category == 'Deemed Medical College' ? 'selected' : '' }}>Deemed Medical College</option>
                        </select>
                    </div>
                </div>
            
<!-- Add other location inputs -->
<button class="btn btn-primary mt-2">Save Location</button>
</form>
</div>

<div class="tab-pane fade" id="media" role="tabpanel">
<form method="POST" action="{{ route('college-edit-update', ['collegeid' => $college->id, 'section' => 'media']) }}" enctype="multipart/form-data">
@csrf

  <!-- Media Tab -->
           
                <div class="mb-3">
                    <label>Hero Section Image</label>
                    <input type="file" name="hero_section_image" class="form-control">
                    @if($college->hero_section_image)
                        <img src="{{ asset('college/' . $college->hero_section_image) }}" style="width: 150px;">
                    @endif
                </div>
                <div class="mb-3">
                    <label>Card Image</label>
                    <input type="file" name="card_image" class="form-control">
                    @if($college->card_image)
                        <img src="{{ asset('college/' . $college->card_image) }}" style="width: 150px;">
                    @endif
                </div>
                <div class="mb-3">
                    <label>Web Page Image</label>
                    <input type="file" name="image" class="form-control">
                    @if($college->image)
                        <img src="{{ asset('college/' . $college->image) }}" style="width: 150px;">
                    @endif
                </div>

<textarea name="youtube_video_embed" class="form-control">{{ $college->youtube_video_embed }}</textarea>
<button class="btn btn-primary mt-2">Save Media</button>
</form>
</div>

<div class="tab-pane fade {{ request('section') == 'seo' ? 'show active' : '' }}" id="seo" role="tabpanel">
    <form action="{{ route('college-edit-update', ['collegeid' => $college->id, 'section' => 'seo']) }}" method="POST">
        @csrf

        <div class="mb-3 row">
            <label class="col-form-label">Meta Title</label>
            <div class="col-12">
                <input type="text" class="form-control" name="seo_meta_title" id="seo_meta_title" value="{{$college->seo_meta_title }}" placeholder="Enter Meta Title" onkeyup="check(this.value)">
                <span id="show_string_lenght"></span>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-form-label">Meta Keywords</label>
            <div class="col-12">
                <textarea class="form-control" name="seo_meta_keywords" id="seo_meta_keywords" rows="5" placeholder="Enter Meta Keywords">{{$college->seo_meta_keywords }}</textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-form-label">Meta Description</label>
            <div class="col-12">
                <textarea class="form-control" name="seo_meta_description" id="seo_meta_description" rows="5" placeholder="Enter Meta Description" onkeyup="check_description(this.value)">{{$college->seo_meta_description }}</textarea>
                <span id="show_string_description_lenght"></span>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-form-label">Slug</label>
            <div class="col-12">
                <input type="text" class="form-control" name="slug" id="slug" value="{{$college->slug }}" placeholder="Slug" readonly>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button class="btn btn-primary bg-dark">Save</button>
            </div>
        </div>
    </form>
</div>


</div>

</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#country').on('change', function () {
                var Country = this.value;
                $("#state").html('');
                $.ajax({
                    url: "{{route('get-state-list')}}",
                    type: "POST",
                    data: {
                        country: Country,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state").append('<option value="' + value
                                .name + '">' + value.name + '</option>');
                        });
                        
                    }
                });
            });
            
        });
        </script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const hash = window.location.hash;
    if (hash) {
        const trigger = document.querySelector(`.nav-link[href="${hash}"]`);
        if (trigger) {
            new bootstrap.Tab(trigger).show();
        }
    } else {
        // Default: show the first tab
        new bootstrap.Tab(document.querySelector('.nav-link')).show();
    }
});
</script>


</x-app-layout>
