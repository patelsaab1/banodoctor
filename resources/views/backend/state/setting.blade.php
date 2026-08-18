<x-app-layout>
    
   
   <div class="container py-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

        @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif



                    {{-- Standard Laravel Form --}}
                    <form action="{{ route('state-setting') }}" method="POST">
                        @csrf

                        {{-- Select Country --}}
                        <div class="form-group m-3">
                            <label>Select Country</label>
                            <select name="country_id" class="form-control">
                                <option value="">Select Country</option>
                                @foreach($countryList as $c)
                                    <option value="{{ $c->id }}" {{ old('country_id') == $c->id ? 'selected' : '' }}>
                                        {{ $c->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country_id') 
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>

                        {{-- State Name --}}
                        <div class="form-group m-3">
                            <label>Name Of State</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter State Name Here" value="{{ old('name') }}">
                            @error('name') 
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary bg-dark m-3">Submit</button>
                    </form>

                </div>
            </div>
        </div>

        {{-- State List Table --}}
        <div class="col-md-6">
            <table class="table table-primary" id="recordTable" width="100%">
                <thead>
                    <tr>
                        <th>State Name</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stateList as $s)
                        <tr>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->country }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

   
</x-app-layout>