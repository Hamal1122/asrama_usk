@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{route ('beranda') }}" class=" bi bi-arrow-left-short px-2 my-auto hover:bg-blue hover:px-4 text-xl rounded-md transition-all"></a>
    <h3 class="py-2">Beranda</h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-Inter px-4 py-4 rounded-md mt-4">
    <div class="order-2 gap-6">
      <h1 href="" class="text-3xl mb-2 font-semibold">{{ $post->judul }}</h1>
      <div class="my-2 mt-6">
        <h3 class="mt-4 text-abu"><i class="bi bi-calendar-check mr-2"></i>Tanggal Mulai : <span class="font-bold">{{ date('d F Y', strtotime($post->tgl_mulai)) }}</span><span class="mx-4 bg-green bg-opacity-20 px-2 py-1 text-sm text-green rounded-full ">{{ date('H:i', strtotime($post->tgl_mulai)) }} WIB</h3>
        <h3 class="mt-4 text-abu"><i class="bi bi-calendar-x mr-2"></i>Tanggal Selesai : <span class="font-bold">{{ date('d F Y', strtotime($post->tgl_berakhir)) }}</span><span class="mx-4 bg-red bg-opacity-20 px-2 py-1 text-sm text-red rounded-full ">{{ date('H:i', strtotime($post->tgl_berakhir)) }} WIB</h3>
        <h3 class="mt-6 text-abu"><i class="bi bi-geo-alt mr-2"></i>Tempat : <span class=" font-thin  bg-abu bg-opacity-10 text-abu py-1 px-2 rounded-lg w-fit">Asrama USk</h3>
        <h2 class="font-thin flex-wrap mt-4 text-abu">Deskripsi :</h2>
        <p class="bg-blue bg-opacity-10 mt-2 py-4 px-4 rounded-md">{{ $post["deskripsi"] }}</p>
      </div>
    </div>
  </div>
  @endsection