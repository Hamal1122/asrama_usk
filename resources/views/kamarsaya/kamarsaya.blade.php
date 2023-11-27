@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{ Session::get('halaman_url_user') }}" class=" px-2 my-auto hover:bg-white hover:text-purple hover:bg-opacity-25  text-xl rounded-md"></a>
    <h3 class="py-2">Kamar Saya</h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-Inter px-6 py-6  rounded-md mt-4">
    <div class="">
      
      <div class="mt-6">
        <h1 class="text-2xl font-bold">Nama Kamar</h1>
      </div>

      <div class="mt-3">
        <h1 class="text-base mt-2 font-Inter text-abu">Kapasitas : </h1>
        <h1 class="text-base mt-2 font-Inter text-abu"> Gedung : </h1>
        <h1 class="text-base mt-2 font-Inter text-abu"> Kategori : </h1>
      </div>

      <div class="mt-6 w-fit text-abu">
        <label class="text-green" for="">Tanggal Masuk</label>
        <input class="field text-abu" type="date" name="tanggal_keluar" id="tanggal_keluar" readonly>
      </div>

      <div class="mt-3 w-fit text-abu">
        <label class="text-red" for="">Tanggal Keluar</label>
        <input class="field text-abu" type="date" name="tanggal_keluar" id="tanggal_keluar" readonly>
      </div>

      <div class=" mt-3 py-4  rounded-md">
        <h1 class="text-abu">Penghuni :</h1>
        <div class="mt-2 font-Inter text-blue">
          <h1 class="bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit"><i class="bi bi-person-fill mr-2"></i>------</h1>
          <h1 class="bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit mt-2"><i class="bi bi-person-fill mr-2"></i>------</h1>
        </div>
      </div>

    </div>
  </div>
  @endsection