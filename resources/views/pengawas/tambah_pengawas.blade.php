@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="{{route ('manage_pengawas') }}" class="bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Tambah Pengawas </h3>
  </div>

  <div class="bg-white p-4 mt-4 rounded-md">
    <form action="/tambah_pengawas" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">Nama Pengawas</label>
        <input type="text" name="nama" id="nama" class="field" placeholder="Nama" required />
      </div>

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">No. Telp</label>
        <input type="number" name="no_hp" id="no_hp" class="field" placeholder="Nama" required />
      </div>

      <div class="mt-4">
        <label class="text-gray-dark" for="">Jenis Kelamin</label>
        <select class="field text-gray-dark" id="jenis_kelamin" name="jenis_kelamin" required>
          <option value="">Pilih Jenis Kelamin</option>
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label class="text-gray-dark" for="">Pilih Gedung</label>
        <select class="field text-gray-dark" id="gedung_id" name="gedung_id" required>
          <option class="text-abu" value="">Tambahkan Ke Gedung -</option>
          @foreach ($ged as $data)
          <option value="{{ $data->id }}">{{ $data->nama }} <span class="text-abu"> - {{ $data->kategori_gedung }}</span></option>
          @endforeach
        </select>
      </div>


      <button type="submit" class="button my-2 px-4 w-fit text-clip">Tambah</button>
      <p class="text-xs font-extralight text-blue">*pastikan semua data sudah benar sebelum menyimpan</p>
    </form>
  </div>
  @endsection