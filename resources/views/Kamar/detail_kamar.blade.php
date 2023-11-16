@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2   rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="" class=" bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Manage Kamar</h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-Inter px-6 py-6  rounded-md mt-4">
    <div class="">
      <div class="bg-purple p-10 mx-auto text-center text-2xl rounded-xl font-bold text-white">
        <h1>{{ $data->nama }}</h1>
      </div>
      <div class="mt-6">
        <h1 class="text-2xl font-bold">{{ $data->nama }}</h1>
      </div>

      <div class="mt-3">
        <h1 class="text-base font-Inter">Kapasitas : <span> </span> <span class="text-blue"> {{ $data->kapasitas }}</span></h1>
        <h1 class="text-base font-Inter"> Gedung : <span> </span> <span class="text-blue">{{ $data->gedung->nama  }}</span></h1>
      </div>

      <div class="bg-purple bg-opacity-10 mt-3 py-4 px-2 rounded-md">
        <h1>Penghuni :</h1>
        <div class="mt-2 font-Inter text-blue">
          <h1>Hamal Rizqy Mukhda</h1>
          <h1>Afkar Siddiq</h1>
        </div>
      </div>

    </div>
  </div>
  @endsection