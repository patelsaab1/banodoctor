<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">

                @if(session()->has('success'))

                <div class="alert alert-success">{{ session()->get('success')}}</div>

                @endif
                <div class="col-md-12 mt-2 ">
                    <h5> Update SEO Information of Blog Post -{{ $seo->title }} </h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('blog-edit-seo',$seo->id) }}" method="post" enctype="multipart/form-data">
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