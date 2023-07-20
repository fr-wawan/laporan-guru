@extends('layouts.admin')

@section('content')
<div class="sm:ml-64 mt-32 ">

  <div class="w-11/12 mx-auto">
    <div class="mb-10 xl:flex justify-end items-center">

      <div class="xl:w-3/12 mt-10 xl:mt-0 ">
        <form>
          <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input type="search"
              class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Search Nama Guru..." name="search" id="search">
            <button type="submit"
              class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
          </div>
        </form>


      </div>
    </div>
    <x-table :headers="['Nama Guru']">
      @foreach ($uploadGuru as $upload)
      <tr class="bg-white border-b hover:bg-gray-50 text-center">
        <td>{{ $loop->iteration }}</td>
        <td class="px-6 py-4">
          {{ $upload->guru->nama }}
        </td>
        <td class="px-6 py-4 flex items-center justify-center gap-1">
          <a href="/storage/{{ $upload->pdf }}" target="_blank"
            class="font-medium text-white bg-blue-700  p-2 px-5 rounded-lg shadow-md hover:bg-blue-600 duration-300 transition-all ">PDF
          </a>
        </td>
      </tr>
      @endforeach


    </x-table>

    @if ($uploadGuru->hasPages())
    <div class=" p-3">
      {{ $uploadGuru->links('vendor.pagination.tailwind') }}
    </div>
    @endif



  </div>
</div>
@endsection