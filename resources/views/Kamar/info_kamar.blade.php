@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{ Session::get('halaman_url_user') }}" class="bi bi-arrow-left-short px-2 my-auto hover:bg-blue hover:px-4 text-xl rounded-md transition-all"></a>
    <h3 class="py-2">Detail Kamar</h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-Inter px-6 py-6  rounded-md mt-4">
    <div class="">
      <div class="bg-abu bg-opacity-20 p-10 mx-auto text-center text-3xl rounded-md font-bold text-abu">
        <h1>{{ $data->nama }}</h1>
      </div>
      <div class="mt-6">
        <h1 class="text-2xl font-bold">{{ $data->nama }}</h1>
      </div>

      <div class="mt-3">
        <h1 class="text-base mt-2 font-Inter text-abu">Kapasitas : <span> </span> <span class="text-blue"><span class="text-green">2 / </span>{{ $data->kapasitas }}</span><span class="text-blue"> Orang</span></h1>
        <h1 class="text-base mt-2 font-Inter text-abu"> Gedung : <span> </span> <span class="text-blue">{{ $data->gedung->nama  }}</span></h1>
        <h1 class="text-base mt-2 font-Inter text-abu"> Kategori : <span> </span> <span class="bg-blue bg-opacity-10 text-blue py-1 px-2 rounded-lg">{{ $data->gedung->kategori_gedung  }}</span></h1>
      </div>

      <div class=" mt-3 py-4  rounded-md">
        <h1 class="text-abu">Penghuni :</h1>
        <div class="mt-2 font-Inter text-blue">
          <h1 class="bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit"><i class="bi bi-person-fill mr-2"></i>Hamal Rizqy Mukhda</h1>
          <h1 class="bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit mt-2"><i class="bi bi-person-fill mr-2"></i>Afkar Siddiq</h1>
        </div>
      </div>

    </div>
  </div>
  @endsection