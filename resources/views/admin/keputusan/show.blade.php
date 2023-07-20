@extends('layouts.admin')

@section('content')
<div class="sm:ml-64 mt-32">
  <div class="w-11/12 mx-auto bg-white p-10 rounded-lg shadow-lg">

    <h1 class="font-bold mb-5 text-xl border-b pb-3">Detail Surat Keputusan</h1>
    <x-input name="no_sk" label="No SK Pengangkatan : " placeholder="No SK Pengangkatan..."
      :value="old('no_sk',$keputusan->no_sk)" :disabled="true" />

    <x-input name="tahun" label="Tahun Pengangkatan : " type="date" :value="old('tahun',$keputusan->tahun)"
      :disabled="true" />



    <div class="lg:flex gap-5">
      <div class="my-3 w-full">
        <label for="lembaga">Lembaga Pengangkatan</label>
        <select name="lembaga" id="lembaga"
          class="block border border-gray-300 w-full p-2 rounded-lg mt-2 placeholder:text-sm" disabled>
          <option value="" disabled selected>Pilih Lembaga Pengangkatan</option>
          <option value="ketua_yayasan" {{ $keputusan->lembaga == 'ketua_yayasan' ? 'selected' : ''
            }}>Ketua Yayasan</option>
          <option value="kepala_sekolah" {{ $keputusan->lembaga == 'kepala_sekolah' ? 'selected' : ''
            }}>>Kepala Sekolah</option>
        </select>

        @error('lembaga')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="my-3 w-full">
        <label for="sumber_gaji">Sumber Gaji</label>
        <select name="sumber_gaji" id="sumber_gaji"
          class="block border border-gray-300 w-full p-2 rounded-lg mt-2 placeholder:text-sm" disabled>
          <option value="" disabled selected>Pilih Sumber Gaji</option>
          <option value="yayasan" {{ $keputusan->sumber_gaji == 'yayasan' ? 'selected' : ''}}
            >Yayasan</option>
          <option value="sekolah" {{ $keputusan->sumber_gaji == 'sekolah' ? 'selected' : ''}}
            >Sekolah</option>
        </select>

        @error('sumber_gaji')
        <p class="text-red-600">{{ $message }}</p>

        @enderror
      </div>
    </div>

    <div class="w-full lg:flex gap-5">
      <x-input name="nama_ibu" label="Nama Ibu Kandung : " placeholder="Nama Ibu Kandung..." :disabled="true"
        :value="old('nama_ibu',$keputusan->nama_ibu)" />

      <x-input name="status_kawin" label="Status Kawin : " placeholder="Status Kawin..."
        :value="old('status_kawin',$keputusan->status_kawin)" :disabled="true" />
    </div>

    <x-input name="nip_pasangan" label="NIP Suami/Istri : " placeholder="NIP Suami/Istri..." type="number"
      :value="old('nip_pasangan',$keputusan->nip_pasangan)" :disabled="true" />
    <p class="text-sm text-gray-500">Boleh Dikosongkan*</p>

    <x-input name="no_kk" label="No Kartu Keluarga : " placeholder="No Kartu Keluarga..."
      :value="old('no_kk',$keputusan->no_kk)" :disabled="true" />
    <p class="text-sm text-gray-500">Boleh Dikosongkan*</p>


    <div class="mt-5 flex gap-3 items-center">
      <a href="{{ route('admin.keputusan.index') }}"
        class="bg-cyan-700 p-2 px-6 rounded-lg shadow-md text-white hover:bg-cyan-600 duration-300 ease-in-out transition">Back</a>

    </div>
  </div>
</div>
@endsection