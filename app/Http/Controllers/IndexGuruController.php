<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Models\SuratKeputusan;

class IndexGuruController extends Controller
{
  public function index()
  {
    $guru = Guru::findOrFail(auth()->guard('guru')->user()->id);
    $suratKeputusan = SuratKeputusan::all();

    return view('guru.index', compact('guru', 'suratKeputusan'));
  }
}
