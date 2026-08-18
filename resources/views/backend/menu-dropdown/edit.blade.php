<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row">
                <div class="col-md-8 mb-lg-5">
                    <div class="card">
                        <div class="card-body">
                            
                            @if(session()->has('success'))
                            
                            <div class="alert alert-success">{{ session()->get('success')}}</div>
                            
                            @endif
                            <form action="{{ route('menu-dropdown-edit',$menu->id) }}" method="post" enctype="multipart/form-data"> 
                                @csrf

                                <div class="mb-3 row">
                                    <label for="inputTitle" class="col-4 col-form-label">Menu Item</label>
                                    <div class="col-8">

                                        <select class="form-control select" name="menu_id" id="menu_id">
                                            @foreach($menus as $item)
                                            <option value="{{ $item->id}}" {{ $menu->menu_id==$item->id?'selected':''}}>
                                                {{ $item->title }}
                                            </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="inputTitle" class="col-4 col-form-label">Title</label>
                                    <div class="col-8">



                                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Menu Title" value="{{ $menu->title}}">

                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-4 col-form-label">Icon</label>
                                    <div class="col-8">



                                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Enter Menu Icon" value="{{$menu->icon}}">

                                    </div>
                                </div>
                               
                                <div class="mb-3 row">
                                    <label for="inputIcon" class="col-4 col-form-label">Icon Image</label>
                                    <div class="col-8">



                                        <input type="file" class="form-control" name="icon_image" id="icon_image" >
                                        
                                       

                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button class="bg-dark btn btn-primary">Save</button> <a href="{{ route('menu-dropdown')}}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                
            </div>
        </div>
    </section>


</x-app-layout>
