@extends('layouts.admin')

@section('content')
<div class="sm:ml-64 mt-32">
  <div class="w-11/12 mx-auto bg-white p-10 rounded-lg shadow-lg">

    <h1 class="font-bold mb-5 text-xl border-b pb-3">Edit Surat Keputusan</h1>
    <form action="{{ route('admin.keputusan.update',$keputusan->id) }}" method="post" enctype="multipart/form-data">


      @method('put')
      @csrf
      <x-input name="no_sk" label="No SK Pengangkatan : " placeholder="No SK Pengangkatan..."
        :value="old('no_sk',$keputusan->no_sk)" />

      <x-input name="tahun" label="Tahun Pengangkatan : " type="date" :value="old('tahun',$keputusan->tahun)" />



      <div class="lg:flex gap-5">
        <div class="my-3 w-full">
          <label for="lembaga">Lembaga Pengangkatan</label>
          <select name="lembaga" id="lembaga"
            class="block border border-gray-300 w-full p-2 rounded-lg mt-2 placeholder:text-sm">
            <option value="" disabled selected>Pilih Lembaga Pengangkatan</option>
            <option value="ketua_yayasan" @if (old('lembaga', $keputusan->lembaga) == 'ketua_yayasan') selected
              @endif>Ketua
              Yayasan</option>
            <option value="kepala_sekolah" @if (old('lembaga', $keputusan->lembaga) == 'kepala_sekolah') selected
              @endif>Kepala Sekolah</option>
          </select>

          @error('lembaga')
          <p class="text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div class="my-3 w-full">
          <label for="sumber_gaji">Sumber Gaji</label>
          <select name="sumber_gaji" id="sumber_gaji"
            class="block border border-gray-300 w-full p-2 rounded-lg mt-2 placeholder:text-sm">
            <option value="" disabled selected>Pilih Sumber Gaji</option>
            <option value="yayasan" @if (old('sumber_gaji', $keputusan->sumber_gaji) == 'yayasan') selected @endif
              >Yayasan</option>
            <option value="sekolah" @if (old('sumber_gaji', $keputusan->sumber_gaji) == 'sekolah') selected @endif
              >Sekolah</option>
          </select>

          @error('sumber_gaji')
          <p class="text-red-600">{{ $message }}</p>

          @enderror
        </div>
      </div>

      <div class="w-full lg:flex gap-5">
        <x-input name="nama_ibu" label="Nama Ibu Kandung : " placeholder="Nama Ibu Kandung..."
          :value="old('nama_ibu',$keputusan->nama_ibu)" />

        <x-input name="status_kawin" label="Status Kawin : " placeholder="Status Kawin..."
          :value="old('status_kawin',$keputusan->status_kawin)" />
      </div>

      <x-input name="nip_pasangan" label="NIP Suami/Istri : " placeholder="NIP Suami/Istri..." type="number"
        :value="old('nip_pasangan',$keputusan->nip_pasangan)" />
      <p class="text-sm text-gray-500">Boleh Dikosongkan*</p>

      <x-input name="no_kk" label="No Kartu Keluarga : " placeholder="No Kartu Keluarga..."
        :value="old('no_kk',$keputusan->no_kk)" />
      <p class="text-sm text-gray-500">Boleh Dikosongkan*</p>

      <div class="my-3">
        <label for="">Upload File SK : </label>

        <input
          class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white mt-2 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 "
          id="file_sk" name="file_sk" type="file">

        <p class="text-sm mt-3 text-gray-500 ">Boleh Dikosongkan Jika Sudah Ada File SK*</p>

        @error('file_sk')
        <p class="text-red-600 mt-2">{{ $message }}</p>
        @enderror
      </div>

      <div class="mt-5 flex gap-3 items-center">
        <a href="{{ route('admin.keputusan.index') }}"
          class="bg-cyan-700 p-2 px-6 rounded-lg shadow-md text-white hover:bg-cyan-600 duration-300 ease-in-out transition">Back</a>
        <button type="submit"
          class="bg-cyan-900 p-2 px-5 rounded-lg shadow-md text-white hover:bg-cyan-800 duration-300 ease-in-out transition">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection