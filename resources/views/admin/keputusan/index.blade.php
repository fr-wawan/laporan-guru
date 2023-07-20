@extends('layouts.admin')

@section('content')
<div class="sm:ml-64 mt-32 ">

  <div class="w-11/12 mx-auto">
    <div class="mb-10 xl:flex justify-between items-center">
      <div>
        <a href="{{ route('admin.keputusan.create') }}"
          class="bg-cyan-950 p-3 px-5 rounded-lg text-white shadow-md hover:bg-cyan-900 duration-300 transition-all ease-out">Create</a>
      </div>

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
              placeholder="Search No SK..." name="search" id="search">
            <button type="submit"
              class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
          </div>
        </form>


      </div>
    </div>
    <x-table :headers="['SK Pengangkatan','Tahun Pengangkatan','Lembaga Pengangkatan','File SK']">
      @foreach ($suratKeputusan as $keputusan)
      <tr class="bg-white border-b hover:bg-gray-50 text-center">
        <td>{{ $loop->iteration }}</td>
        <td class="px-6 py-4">
          {{ $keputusan->no_sk }}
        </td>
        <td class="px-6 py-4">
          {{ $keputusan->tahun }}
        </td>
        <td class="px-6 py-4">
          @if ($keputusan->lembaga == 'ketua_yayasan')
          Ketua Yayasan
          @else
          Kepala Sekolah
          @endif

        </td>

        <td class="px-6 py-4">
          <a href="/storage/{{ $keputusan->file_sk }}" target="_blank"
            class="font-medium text-white bg-blue-700  p-2 px-5 rounded-lg shadow-md hover:bg-blue-600 duration-300 transition-all ">PDF
          </a>
        </td>

        <td class="px-6 py-4 flex items-center justify-center gap-1">

          <a href="{{ Route('admin.keputusan.show',$keputusan->id) }}"
            class="font-medium text-white bg-blue-500  p-2 px-5 rounded-lg shadow-md  hover:bg-blue-400 duration-300 transition-all ">Detail</a>

          <a href="{{ route('admin.keputusan.edit',$keputusan->id) }}"
            class="font-medium text-white bg-blue-600  p-2 px-5 rounded-lg shadow-md hover:bg-blue-500 duration-300 transition-all">Edit</a>

          <form action="{{ route('admin.keputusan.destroy',$keputusan->id) }}" method="post"
            onsubmit="return confirm('Are You Sure?')">
            @method('delete')
            @csrf
            <button type="submit"
              class="font-medium text-white bg-red-600 hover:bg-red-500 duration-300 transition-all  p-2 px-5 rounded-lg shadow-md">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach


    </x-table>

    @if ($suratKeputusan->hasPages())
    <div class=" p-3">
      {{ $suratKeputusan->links('vendor.pagination.tailwind') }}
    </div>
    @endif



  </div>
</div>
@endsection