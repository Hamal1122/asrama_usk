@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2 rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{route ('manage_kamar') }}" class="bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Edit Gedung</h3>
  </div>


  <div class="bg-white p-4 mt-4 rounded-md">
    <form action="/edit_gedung/{{ $data->id }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">Nama Gedung</label>
        <input type="text" name="nama" id="nama" class="field" placeholder="Gedung" value="{{ $data->nama }}" required />
      </div>

      <div class="mt-4">
        <label class="text-gray-dark " for="">Pilih Kategori</label>
        <select class="field text-gray-dark" id="kategori" name="kategori_gedung" required>
          <option value="{{ $data->id }}">{{ $data->kategori_gedung }}</option>
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>

      <button type="submit" class="button my-2 px-4 w-fit text-clip">Simpan</button>
      <p class="text-xs font-extralight text-blue">*pastikan semua data sudah benar sebelum menyimpan</p>
  </div>
  </form>
</div>
@endsection