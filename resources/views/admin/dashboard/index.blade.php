@extends('layouts.admin')

@section('content')
<p class="sm:ml-64 mt-32">
<div class="flex xl:ml-72 md:ml-72 flex-col xl:flex-row gap-5">
  <a href="{{ route('admin.keputusan.index') }}"
    class="bg-white xl:w-3/12 w-8/12 mb-5 p-5 rounded-lg shadow-md flex items-center gap-5">
    <div class="bg-blue-600 p-2 rounded-full text-white">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-text" width="45" height="45"
        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
        <path d="M9 12h6"></path>
        <path d="M9 16h6"></path>
      </svg>
    </div>
    <div>
      <h3 class="font-semibold text-lg">Surat Keputusan</h3>
      <p>{{ $keputusan }}</p>
    </div>
  </a>
  <a href="{{ route('admin.guru.index') }}"
    class="bg-white xl:w-3/12 w-8/12 mb-5 p-5 rounded-lg shadow-md flex items-center gap-5">
    <div class="bg-green-600 p-2 rounded-full text-white">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="45" height="45"
        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
        <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
      </svg>
    </div>
    <div>
      <h3 class="font-semibold text-lg">Guru</h3>
      <p>{{ $guru }}</p>
    </div>
  </a>
</div>
</p>
@endsection