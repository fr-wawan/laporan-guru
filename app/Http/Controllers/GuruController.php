<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruPostRequest;
use App\Http\Requests\GuruRequest;
use App\Http\Requests\GuruUpdateRequest;
use App\Models\Guru;
use App\Models\SuratKeputusan;
use Illuminate\Http\Request;

class GuruController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $listGuru = Guru::latest()->filter(request(['search']))->paginate(10);
    return view('admin.guru.index', compact('listGuru'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $suratKeputusan = SuratKeputusan::all();
    return view('admin.guru.create', compact('suratKeputusan'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(GuruPostRequest $request)
  {

    $validatedData = $request->validated();

    $guru =  Guru::create($validatedData);

    if ($guru) {
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
  public function show(Guru $guru)
  {

    $suratKeputusan = SuratKeputusan::all();
    return view('admin.guru.show', compact('guru', 'suratKeputusan'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Guru $guru)
  {
    $suratKeputusan = SuratKeputusan::all();
    return view('admin.guru.edit', compact('guru', 'suratKeputusan'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(GuruUpdateRequest $request, Guru $guru)
  {
    $validatedData = $request->validated();
    $guru->update($validatedData);


    if ($guru) {
      return redirect()->route('admin.guru.index')->with([
        'success' => 'Berhasil Membuat Data'
      ]);
    }

    return redirect()->route('admin.guru.index')->with([
      'error' => 'Gagal Membuat Data'
    ]);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Guru $guru)
  {
    $guru->delete();

    if ($guru) {
      return redirect()->route('admin.guru.index')->with([
        'success' => 'Berhasil Membuat Data'
      ]);
    }

    return redirect()->route('admin.guru.index')->with([
      'error' => 'Gagal Membuat Data'
    ]);
  }
}
