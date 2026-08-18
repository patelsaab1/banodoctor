<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row">
                <div class="col-md-4 mb-lg-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h3> Create Mega Submenu </h3>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('mega-menu-dropdown') }}" method="post">
                                        @csrf

                                        <div class="mb-3 row">
                                            <label for="inputTitle" class="col-4 col-form-label">Menu Item</label>
                                            <div class="col-8">

                                                <select class="form-control select" name="menu_id" id="menu_id">
                                                    @foreach($menu as $item)
                                                    <option value="{{ $item->id}}">
                                                        {{ $item->title }}
                                                    </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>




                                        <div class="mb-3 row">
                                            <label for="inputTitle" class="col-4 col-form-label">Submenu Title</label>
                                            <div class="col-8">



                                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Menu Title">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="inputIcon" class="col-4 col-form-label">Icon</label>
                                            <div class="col-8">



                                                <input type="text" class="form-control" name="icon" id="icon" placeholder="Enter Menu Icon" value='<i class="fa fa-graduation-cap" aria-hidden="true"></i>'>

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
                        <div class="col-md-12">
                            <h3>Create Mega Submenu Items</h3>
                            <div class="card">
                               <div class="card-body">
    <form action="{{ route('mega-submenu-dropdown') }}" method="post">
        @csrf

        <div id="submenuContainer">
            <!-- Submenu Group -->
            <div class="submenu-group border p-3 mb-3 rounded">
                <div class="mb-3 row">
                    <label class="col-4 col-form-label">Submenu Item</label>
                    <div class="col-8">
                        <select class="form-control" name="menu_id[]">
                            @foreach($submenu as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-4 col-form-label">Select Page</label>
                    <div class="col-8">
                        <select class="form-control" name="page_id[]">
                            @foreach($pageList as $page)
                                <option value="{{ $page->id }}">{{ $page->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-4 col-form-label">Submenu Title</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="title[]" placeholder="Enter Menu Title">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-4 col-form-label">Icon</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="icon[]" placeholder="Enter Menu Icon" value='<i class="fa fa-graduation-cap" aria-hidden="true"></i>'>
                    </div>
                </div>

                <button type="button" class="btn btn-danger btn-sm remove-submenu">Remove</button>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-12 text-end">
                <button type="button" class="btn btn-success btn-sm" id="addMoreSubmenu">+ Add More</button>
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
                    </div>


                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-primary"   id="recordTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>

                                            <th scope="col">Icon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($records as $record )
                                        <tr class="">
                                            <td scope="row">{{ $record->title}}</td>

                                            <td>{!! $record->icon !!}</td>

                                            <td>
                                                <a href=""><i class="fa fa-cog text-success"></i></a>
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
<script>
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('submenuContainer');
    const addMoreBtn = document.getElementById('addMoreSubmenu');

    addMoreBtn.addEventListener('click', function () {
        const firstGroup = container.querySelector('.submenu-group');
        const clone = firstGroup.cloneNode(true);

        // Reset input values
        clone.querySelectorAll('input').forEach(input => input.value = '');
        clone.querySelectorAll('select').forEach(select => select.selectedIndex = 0);

        container.appendChild(clone);
    });

    container.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-submenu')) {
            const groups = container.querySelectorAll('.submenu-group');
            if (groups.length > 1) {
                e.target.closest('.submenu-group').remove();
            } else {
                alert('At least one submenu is required.');
            }
        }
    });
});
</script>

</x-app-layout>
