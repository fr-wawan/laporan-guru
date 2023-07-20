<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginGuruController extends Controller
{
  public function index()
  {
    return view('guru.auth.login');
  }

  public function login(Request $request)
  {
    $validatedData = $request->validate([
      'nik' => 'required',
      'password' => 'required',
    ]);
    if (Auth::guard('guru')->attempt($validatedData)) {

      return redirect()->intended('/guru');
    }

    return back()->with(['error' => 'Invalid Credentials']);
  }

  public function logout(Request $request)
  {
    Auth::guard('guru')->logout();


    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('auth.index');
  }
}
