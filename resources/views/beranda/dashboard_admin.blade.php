@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2"> Beranda</h3>
  </div>

  <div class="flex flex-wrap mt-4 gap-8 bg-white rounded-md  px-6 py-8">
    <div class=" bg-white   font-poppins text-gray-dark py-4 px-8 rounded-2xl text-center flex gap-8 items-center drop-shadow-md w-60 ">
      <div class=" text-left">
        <h3 class=" font-bold text-2xl text-gray-dark">{{ $jumlah_gedung }} <span class="font-light text-base">Gedung</span></h3>
        <h1 class="text-yellow text-xs font-extralight ">Total Gedung</h1>
      </div>
    </div>

    <div class=" bg-white   font-poppins text-gray-dark py-4 px-8 rounded-2xl text-center flex gap-8 items-center drop-shadow-md w-60 ">
      <div class=" text-left">
        <h3 class=" font-bold text-2xl text-gray-dark">{{ $jumlah_kamar }} <span class="font-light text-base text-abu">Kamar</span></h3>
        <h1 class="text-yellow text-xs font-extralight ">Total Kamar</h1>
      </div>
    </div>

    <div class=" bg-white   font-poppins text-gray-dark py-4 px-8 rounded-2xl text-center flex gap-8 items-center drop-shadow-md w-60 ">
      <div class=" text-left">
        <h3 class=" font-bold text-2xl text-gray-dark">{{ $jumlah_postingan }} <span class="font-light text-base">Postingan</span></h3>
        <h1 class="text-yellow text-xs font-extralight ">Total Postingan</h1>
      </div>
    </div>

    <div class=" bg-white   font-poppins text-gray-dark py-4 px-8 rounded-2xl text-center flex gap-8 items-center drop-shadow-md w-60 ">
      <div class=" text-left">
        <h3 class=" font-bold text-2xl text-gray-dark">0<span class="font-light text-base">Pengguna</span></h3>
        <h1 class="text-yellow text-xs font-extralight ">Total Pengguna</h1>
      </div>
    </div>




  </div>
  @endsection