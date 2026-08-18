<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row">
                <div class="col-md-4 mb-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('menu') }}" method="post">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="inputTitle" class="col-4 col-form-label">Menu Title</label>
                                    <div class="col-8">



                                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Menu Title">

                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-4 col-form-label">Icon</label>
                                    <div class="col-8">



                                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Enter Menu Icon">

                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputCategory" class="col-4 col-form-label">Category</label>
                                    <div class="col-8">
                                        <select class="form-select" name="category" id="category">
                                            <option value="0"> Single Page</option>
                                            <option value="1">Dropdowns</option>
                                            <option value="2">Mega-menu Dropdowns</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button class="bg-dark btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"  id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($records as $record )
                                        <tr class="">
                                            <td scope="row">{{ $record->title}}</td>
                                            <td>@if($record->category == 0)
                                                Single Page
                                                @elseif($record->category==1)
                                                Menu-Dropdowns
                                                @else
                                                Mega-menu Dropdowns
                                                @endif
                                            </td>
                                            <td>{!! $record->icon !!}</td>

                                            <td>

                                                @if($record->category == 1)
                                                <a href="{{ route('menu-dropdown') }}"><i class="fa fa-cog text-success"></i></a>
                                                @endif

                                                @if($record->category == 2)

                                                @endif
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
