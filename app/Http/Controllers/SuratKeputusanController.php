<?php

namespace App\Http\Controllers;

use App\Models\SuratKeputusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratKeputusanController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $suratKeputusan = SuratKeputusan::latest()->filter(request(['search']))->paginate(10)->withQueryString();
    return view('admin.keputusan.index', compact('suratKeputusan'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.keputusan.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'no_sk' => 'required',
      'tahun' => 'required|date',
      'lembaga' => 'required',
      'sumber_gaji' => 'required',
      'nama_ibu' => 'required',
      'status_kawin' => 'required',
      'nip_pasangan' => 'numeric|nullable',
      'no_kk' => 'numeric|nullable',
      'file_sk' => 'required|file|mimes:pdf',
    ]);

    $validatedData['file_sk'] = $request->file('file_sk')->store('file', 'public');

    $suratKeputusan = SuratKeputusan::create($validatedData);


    if ($suratKeputusan) {
      return redirect()->route('admin.keputusan.index')->with([
        'success' => 'Berhasil Membuat Data'
      ]);
    }

    return redirect()->route('admin.keputusan.index')->with([
      'error' => 'Gagal Membuat Data'
    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(SuratKeputusan $keputusan)
  {
    return view('admin.keputusan.show',  compact('keputusan'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(SuratKeputusan $keputusan)
  {
    return view('admin.keputusan.edit', compact('keputusan'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, SuratKeputusan $keputusan)
  {
    $validatedData = $request->validate([
      'no_sk' => 'required',
      'tahun' => 'required|date',
      'lembaga' => 'required',
      'sumber_gaji' => 'required',
      'nama_ibu' => 'required',
      'status_kawin' => 'required',
      'nip_pasangan' => 'numeric|nullable',
      'no_kk' => 'numeric|nullable',
      'file_sk' => 'file|mimes:pdf',
    ]);

    if ($request->file('file_sk')) {
      if ($keputusan->file_sk) {
        Storage::disk('public')->delete($keputusan->file_sk);
      }
      $validatedData['file_sk'] = $request->file('file_sk')->store('file', 'public');
    }

    $keputusan->update($validatedData);

    if ($keputusan) {
      return redirect()->route('admin.keputusan.index')->with([
        'success' => 'Berhasil Mengupdate Data'
      ]);
    }
    return redirect()->route('admin.keputusan.index')->with([
      'error' => 'Gagal Mengupdate Data'
    ]);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(SuratKeputusan $keputusan)
  {
    Storage::disk('public')->delete($keputusan->file_sk);

    $keputusan->delete();

    if ($keputusan) {
      return redirect()->route('admin.keputusan.index')->with([
        'success' => 'Berhasil Menghapus Data'
      ]);
    }
    return redirect()->route('admin.keputusan.index')->with([
      'error' => 'Gagal Menghapus Data'
    ]);
  }
}
