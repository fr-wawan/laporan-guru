@extends('layouts.auth')

@section('content')
<div class="flex justify-center items-center h-screen">
  <div class="max-w-sm bg-white p-10 rounded-lg shadow-md w-full">
    @if (session()->has('error'))
    <p class="bg-red-600 text-white text-center p-4 rounded-lg mb-5">Invalid Credentials</p>
    @endif
    <h1 class="text-center font-bold text-xl">LOGIN GURU</h1>
    <form action="/" method="post">
      @csrf
      <x-input name="nik" label="NIK : " placeholder="NIK..." />

      <x-input name="password" label="Password : " placeholder="Password..." type="password" />




      <div class="mt-5">
        <button type="submit"
          class="p-2.5 px-6 bg-blue-600 rounded-lg shadow-md text-white hover:outline-blue-600 hover:text-blue-600 hover:outline hover:outline-1 hover:bg-white transition-all duration-300 ease-in-out">Login</button>
      </div>
    </form>
  </div>
</div>
@endsection