<x-app-layout>
    <div class="container-fluid mt-4">

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Upload a File</h4>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <input type="file" name="file" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Uploaded Files</h4>
            </div>
            <div class="card-body">
                @if($files->count())
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>File Name</th>
                                    <th>Extension</th>
                                    <th>Type</th>
                                    <td>Embed</td>
                                 
                                    <th>Copy URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{ $file->original_name }}</td>
                                        <td>{{ $file->extension }}</td>
                                        <td>{{ $file->file_type }}</td>
                                        <td>
<pre>
&lt;div class="downloadFileSection_url_{{ asset('storage/uploads/' . $file->file_path) }}"&gt;&lt;/div&gt;
</pre>

                                            
                                        </td>
                                    
                                        <td>
                                            <div class="input-group">
                                                <input type="text" class="form-control copy-url" value="{{ asset('storage/uploads/' . $file->file_path) }}" readonly>
                                                <button class="btn btn-outline-secondary copy-btn" type="button">Copy</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted">No files uploaded yet.</p>
                @endif
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).on('click', '.copy-btn', function () {
        let input = $(this).closest('.input-group').find('.copy-url');
        input.select();
        input[0].setSelectionRange(0, 99999); // for mobile
        document.execCommand('copy');
        alert('Copied: ' + input.val());
    });
    </script>
</x-app-layout>
