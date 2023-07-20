<?php

namespace App\Http\Controllers;

use App\Models\UploadGuru;
use Illuminate\Http\Request;

class UploadGuruController extends Controller
{
  public function index()
  {
    $uploadGuru = UploadGuru::latest()->filter(request(['search']))->paginate(10);
    return view('admin.upload.index', compact('uploadGuru'));
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'pdf' => 'required|file|mimes:pdf'
    ]);

    $validatedData['guru_id'] = auth()->guard('guru')->user()->id;

    $validatedData['pdf'] = $request->file('pdf')->store('upload_guru', 'public');

    $uploadGuru = UploadGuru::create($validatedData);

    if ($uploadGuru) {
      return redirect()->route('upload.guru.index')->with([
        'success' => 'Berhasil Mengupload PDF'
      ]);
    }
    return redirect()->route('upload.guru.index')->with([
      'error' => 'Gagal Mengupload PDF'
    ]);
  }
}
