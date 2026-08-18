<x-app-layout>

    <section>
        <div class="container py-2">
             <div class="d-flex flex-wrap align-items-center gap-2">

    <a href="{{ url('/college/'.$seo->slug )}}" target="_blank" class="btn btn-info" title="Click here to view college information">
        Slug - {{ url('/college/'.$seo->slug ) }}
    </a>

    <a href="{{ route('college-faq-create', $seo->id) }}"  class="btn btn-warning">
        Add/View FAQ 
    </a>

    <a href="{{ route('college-edit', $seo->id) }}" title="Click here to edit college content" class="btn btn-success">
        <i class="fa fa-cog text-success"></i> Update College
    </a>

    <a href="{{ route('college-edit-seo', $seo->id) }}" title="Click here to edit SEO information" class="btn btn-primary">
        <i class="fa fa-pencil text-warning"></i> Update SEO
    </a>
  <a href="{{ route('college-view') }}" title="Click here to edit SEO information" class="btn btn-primary">
        <i class="fa fa-eye text-danger"></i>Go Back
    </a>
</div>


            <div class="row d-flex justify-content-center">

                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif
                <div class="col-md-12 mt-2 ">
                    <h5> Update SEO Information of College Post -{{ $seo->name }} </h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('college-edit-seo',$seo->id) }}" method="post" enctype="multipart/form-data">
                                @csrf



                            @include('backend.seo.edit')
                            </form>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </section>


</x-app-layout>