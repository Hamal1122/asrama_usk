@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="{{ Session::get('halaman_url') }}" class=" bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Edit Kamar</h3>
  </div>

  <div class="bg-white p-4 mt-4 rounded-md">
    <form action="/edit_kamar/{{ $data->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">Nama Kamar</label>
        <input type="text" name="nama" id="nama" class="field" placeholder="Nama Kamar" value="{{ $data->nama }}" required />
      </div>

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label class="text-gray-dark" for="">Pilih Gedung</label>
        <select class="field text-gray-dark" id="gedung_id" name="gedung_id">
          <option value="{{ $data->id }}">{{ $data->gedung->nama }}</option>
          @foreach ($ged as $data)
          <option value="{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label class="text-gray-dark" for="">Kapasitas</label>
        <select class="field text-gray-dark" id="kapasitas" name="kapasitas" >
          <option value="{{ $data->id }}">{{ $data->kapasitas }}</option>
          <option value="2">2 Orang</option>
          <option value="4">4 Orang</option>
        </select>
      </div>

      <button type="submit" class="button my-2 px-4 w-fit text-clip">Simpan</button>
      <p class="text-xs font-extralight text-blue">*pastikan semua data sudah benar sebelum menyimpan</p>
  </div>
  </form>
</div>
@endsection