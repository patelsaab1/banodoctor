<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadedFile;

class FileUploadController extends Controller
{
    public function index()
    {
        $files = UploadedFile::latest()->get();
        return view('backend.upload.index', compact('files'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file' // Adjust file types as needed,
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads', 'public');

        $uploaded = UploadedFile::create([
            'original_name' => $file->getClientOriginalName(),
            'file_path' => $path,
            'file_type' => $file->getMimeType(),
            'extension' => $file->getClientOriginalExtension(),
        ]);

        return redirect()->back()->with('success', 'File uploaded successfully!');
    }
    
    
    public function download($id)
{
    $file = UploadedFile::findOrFail($id);
    $path = base_path('uploads/' . $file->file_path);

    if (!file_exists($path)) {
        abort(404, 'File not found');
    }

    return response()->download($path, $file->original_name);
}

}
