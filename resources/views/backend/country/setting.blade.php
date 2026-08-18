<x-app-layout>
    
 <div class="container-fluid py-2 mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    {{-- Success Alert --}}
                   @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif


                    {{-- Standard Laravel Form --}}
                    <form action="{{ route('country-setting') }}" method="POST">
                        @csrf

                        <div class="form-group m-3">
                            <label>Country Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Country Name Here" value="{{ old('name') }}">
                            @error('name') 
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary bg-dark m-3">Submit</button>
                    </form>

                </div>
            </div>  
        </div>

        <div class="col-md-6">
            <table class="table table-primary" id="recordTable" width="100%">
                <thead>
                    <tr>
                        <th>Country Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ContryList as $c)
                        <tr>
                            <td>{{ $c->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
  
</x-app-layout>
   
