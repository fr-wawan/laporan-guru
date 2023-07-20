<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\SuratKeputusan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $keputusan = SuratKeputusan::count();
    $guru = Guru::count();
    return view('admin.dashboard.index', compact('keputusan', 'guru'));
  }
}
