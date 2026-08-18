<x-app-layout>

    <section>
        <div class="container py-2">

            <div class="row d-flex justify-content-center">


    
            



                <div class="col-md-12 mt-2">
                    <h3> List of States In India </h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive"  id="collegeList" width="100%">
                                <table >
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                           
                                            <th scope="col">State</th>
                                            <th scope="col">Page</th>
                                          
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach($tables as $record )
                                        <?php $i++;?>
                                        <tr class="">
                                            <td><?=$i?></td>
                                            <td>{{ $record->name}}</td>
                                            <td>
                                                <form method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $record->id}}">
                                                    <select name="page_id">
                                                        
                                                        @foreach($pages as $page)
                                                        <option value="{{ $page->id}}" 
                                                        @if($record->page_id==$page->id)
                                                        
                                                        selected
                                                        @endif 
                                                        
                                                        >{{ $page->title }}</option>
                                                            @endforeach
                                                        
                                                    </select>
                                                    
                                                    <button type="submit" class="btn">Update</button>
                                                </form>
                                                
                                            </td>
                                           
                                            <td>
                                                
                                               
                                                <a href="{{ route('states-college-view',$record->id) }}"><i class="fa fa-eye text-success"></i></a>

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