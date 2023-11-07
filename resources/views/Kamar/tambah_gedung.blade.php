@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="" class="bi bi-arrow-left-short"></a>
    <h3>Tambah Informasi</h3>
  </div>

  <form action="/tambah_gedung" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-4 font-poppins text-sm text-gray-dark ">
      <label for="text" class="text-gray-dark">ID</label>
      <input type="number" name="id" id="id" class="field" placeholder="id" required />
    </div>

    <div class="mt-4 font-poppins text-sm text-gray-dark ">
      <label for="text" class="text-gray-dark">Nama Gedung</label>
      <input type="text" name="nama" id="nama" class="field" placeholder="Gedung" required />
    </div>
    <button type="submit" class="button my-2 px-4 w-fit text-clip">Upload</button>
  </form>
  @endsection