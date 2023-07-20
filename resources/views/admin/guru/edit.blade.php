@extends('layouts.admin')

@section('content')
<div class="sm:ml-64 mt-32">
  <div class="w-11/12 mx-auto bg-white p-10 rounded-lg shadow-lg">

    <h1 class="font-bold mb-5 text-xl border-b pb-3">Edit Guru</h1>
    <form action="{{ route('admin.guru.update',$guru->id) }}" enctype="multipart/form-data" method="post">


      @method('put')
      @csrf

      <x-input name="nama" label="Nama Guru : " placeholder="Nama Guru..." :value="old('nama',$guru->nama)" />

      <div class="my-3 w-full">
        <label for="jenis_kelamin">Jenis Kelamin : </label>
        <select name="jenis_kelamin" id="jenis_kelamin"
          class="block border border-gray-300 w-full p-2 rounded-lg mt-2 placeholder:text-sm">
          <option value="" disabled selected>Pilih Jenis Kelamin</option>
          <option value="pria" @if (old('jenis_kelamin', $guru->jenis_kelamin) == 'pria') selected @endif>Pria</option>
          <option value="wanita" @if (old('jenis_kelamin', $guru->jenis_kelamin) == 'wanita') selected @endif
            >Wanita</option>
        </select>

        @error('jenis_kelamin')
        <p class="text-red-600">{{ $message }}</p>

        @enderror
      </div>

      <x-input name="nik" label="NIK Guru : " placeholder="NIK Guru..." :value="old('nik',$guru->nik)" type="number" />

      <div class="lg:flex gap-5">
        <div class="w-full">
          <x-input name="npwp" label="NPWP Guru : " placeholder="NPWP Guru..." :value="old('npwp',$guru->npwp)"
            type="number" />

          <p class="text-gray-500 text-sm">
            Ketik Hanya angkanya saja*
          </p>
        </div>

        <div class="w-full">
          <x-input name="nuptk" label="NUPTK Guru : " placeholder="NUPTK Guru..." :value="old('nuptk',$guru->nuptk)"
            type="number" />
        </div>
      </div>

      <div class="lg:flex my-3 gap-5">
        <div class="w-full">
          <x-input name="tempat_lahir" label="Tempat Lahir Guru : " placeholder="Tempat Lahir Guru..."
            :value="old('tempat_lahir',$guru->tempat_lahir)" />
        </div>

        <div class="w-full">
          <x-input name="tanggal_lahir" label="Tanggal Lahir Guru : " placeholder="Tanggal Lahir Guru..."
            :value="old('tanggal_lahir',$guru->tanggal_lahir)" type="date" />
        </div>
      </div>

      <div class="lg:flex  gap-5">
        <div class=" w-full my-3">
          <label for="status">Status Guru : </label>
          <select name="status" id="status"
            class="block border border-gray-300 w-full p-2 rounded-lg mt-2 placeholder:text-sm">
            <option value="" disabled selected>Pilih Status</option>
            <option value="guru_honor" @if (old('status', $guru->status) == 'guru_honor') selected @endif>Guru Honor
            </option>
            <option value="yayasan" @if (old('status', $guru->status) == 'yayasan') selected @endif>Yayasan</option>
          </select>

          @error('status')
          <p class="text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="w-full my-3">
          <label for="jenis_ptk">Jenis PTK Guru : </label>
          <select name="jenis_ptk" id="jenis_ptk"
            class="block border border-gray-300 w-full p-2 rounded-lg mt-2 placeholder:text-sm">
            <option value="" disabled selected>Pilih Jenis PTK</option>
            <option value="guru_mapel" @if (old('jenis_ptk', $guru->jenis_ptk) == 'guru_mapel') selected @endif>Guru
              Mapel</option>
            <option value="guru_bk" @if (old('jenis_ptk', $guru->jenis_ptk) == 'guru_bk') selected @endif
              >Guru BK</option>
          </select>

          @error('jenis_ptk')
          <p class="text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="lg:flex  gap-5">
        <x-input name="agama" label="Agama Guru : " placeholder="Agama Guru..." :value="old('agama',$guru->agama)" />

        <div class="w-full">
          <x-input name="email" label="Email Guru : " placeholder="Email Guru..." :value="old('email',$guru->email)"
            type="email" />
          <p class="text-gray-500 text-sm">Boleh Dikosongkan *</p>
        </div>
      </div>

      <div class="my-3 w-full">
        <x-input name="alamat" label="Alamat Guru : " placeholder="Alamat Guru..."
          :value="old('alamat',$guru->alamat)" />
      </div>

      <div class="my-3 w-full">
        <div class="mb-2">
          <label for="tugas_tambahan">Tugas Tambahan Guru : </label>
        </div>
        <input id="x" type="hidden" name="tugas_tambahan" value="{{ old('tugas_tambahan',$guru->tugas_tambahan) }}">
        <trix-editor input="x"></trix-editor>
        @error('tugas_tambahan')
        <p class="text-red-600 mt-2">{{ $message }}</p>
        @enderror

        <p class="text-gray-500 text-sm mt-2">Boleh Dikosongkan *</p>
      </div>

      <div class="my-3 w-full">
        <div class="mb-2">
          <label for="">Surat Keputusan : </label>
        </div>
        <select name="surat_keputusan_id" id="sk" class="border">
          <option></option>
          @foreach ($suratKeputusan as $keputusan)
          <option value="{{ $keputusan->id }}" @if (old('surat_keputusan_id', $guru->surat_keputusan_id) ==
            $keputusan->id) selected @endif>{{
            $keputusan->no_sk }}
          </option>
          @endforeach
        </select>
      </div>

      <div class="mt-7 flex gap-3 items-center">
        <a href="{{ route('admin.guru.index') }}"
          class="bg-cyan-700 p-2 px-6 rounded-lg shadow-md text-white hover:bg-cyan-600 duration-300 ease-in-out transition">Back</a>
        <button type="submit"
          class="bg-cyan-900 p-2 px-5 rounded-lg shadow-md text-white hover:bg-cyan-800 duration-300 ease-in-out transition">Submit</button>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  $("#sk").select2({
    placeholder: 'Select SK',
  });
</script>
@endsection