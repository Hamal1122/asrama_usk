@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="{{route ('manage_kamar') }}" class="bi bi-arrow-left-short"></a>
    <h3>Edit Gedung</h3>
  </div>

  <form action="/edit_gedung/{{ $data->id }}" method="POST" enctype="multipart/form-data">
    @csrf 
      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">ID</label>
        <input type="text" name="id" id="id" class="field" placeholder="Judul" value="{{ $data->id }}" />
      </div>

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">Nama Gedung</label>
        <input type="text" name="nama" id="nama" class="field" placeholder="Judul" value="{{ $data->nama }}" required />
      </div>

      <button type="submit" class="button my-2 px-4 w-fit text-clip">Simpan</button>
    </div>
  </form>
  @endsection