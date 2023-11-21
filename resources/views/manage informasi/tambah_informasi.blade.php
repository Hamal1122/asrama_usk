@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="{{route ('manage_informasi') }}" class="bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md "></a>
    <h3 class="py-2">Tambah Informasi</h3>
  </div>

  <form action="/tambah_informasi" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mt-4 font-poppins text-sm text-gray-dark ">
      <label for="text" class="text-gray-dark">Judul</label>
      <input type="text" name="judul" id="judul" class="field" placeholder="Judul" required />
    </div>

    <div class="mt-4 font-poppins text-sm text-gray-dark ">
      <label for="text" class="text-gray-dark">pukul</label>
      <input type="time" name="time" id="judul" class="field" placeholder="Judul" required />
    </div>

    <div class="mt-4 font-poppins text-sm text-gray-dark ">
      <label for="text" class="text-gray-dark">Tanggal Mulai</label>
      <input type="date" name="tgl_mulai" id="tgl_mulai" class="field" required />
    </div>

    <div class="mt-4 font-poppins text-sm text-gray-dark ">
      <label for="text" class="text-gray-dark">Tanggal Selesai</label>
      <input type="date" name="tgl_berakhir" id="tgl_berakhir" class="field" required />
    </div>

    <div class="mt-4 font-poppins text-sm text-gray-dark ">
      <label for="text" class="text-gray-dark">Tempat</label>
      <input type="text" name="tempat" id="tempat" class="field" required />
    </div>

    <div class="mt-4 font-poppins text-sm text-gray-dark ">
      <label for="text" class="text-gray-dark">Deskripsi</label>
      <input type="text" name="deskripsi" id="deskripsi" class="field " />
    </div>

    <button type="submit" class="button my-2 px-4 w-fit text-clip">Upload</button>
</div>
</form>
@endsection