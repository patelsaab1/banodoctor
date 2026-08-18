<x-app-layout>

    <section>
        <div class="container py-2">

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Error Message --}}
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Validation Errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt-2 ">
                    <h3>Create Course Category</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('subcategory') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3 row">
                                    <label for="category_id" class="col-form-label">Create Medical Course Degrees</label>
                                    <div class="col-12">
                                        <select class="form-control" name="category_id" id="category_id">
                                            @foreach($category as $c)
                                                <option value="{{ $c->id }}">{{ $c->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="title" class="col-form-label">Title</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="icon" class="col-form-label">Icon</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Enter Icon" value="{{ old('icon', '<i class="fa fa-graduation-cap" aria-hidden="true"></i>') }}">
                                        @error('icon')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="content" class="col-form-label">Short Description</label>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" name="content" id="content" placeholder="Write short description">{{ old('content') }}</textarea>
                                        @error('content')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="image" class="col-form-label">Image</label>
                                    <div class="col-12">
                                        <input type="file" class="form-control" name="image" id="image">
                                        @error('image')
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 mt-2">
                    <h3>List of Medical Course Degrees</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary" id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($records as $record)
                                            <tr>
                                                <td>{{ $record->title }}</td>
                                                <td>{!! $record->content !!}</td>
                                                <td><img src="{{ asset('subcategory/'.$record->image) }}" width="30"></td>
                                                <td>{!! $record->icon !!}</td>
                                                <td>
                                                    <a href="{{ route('subcategory-edit-seo', $record->id) }}"><i class="fa fa-cog text-success"></i></a>
                                                    <a href="{{ route('update.subcategory.image', $record->id) }}">Update Image</a>
                                                    <a href=""><i class="fa fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
