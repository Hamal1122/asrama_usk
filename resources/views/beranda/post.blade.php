@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{route ('beranda') }}" class=" bi bi-arrow-left-short px-2 my-auto hover:bg-blue hover:px-4 text-xl rounded-md transition-all"></a>
    <h3 class="py-2">Beranda</h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-Inter p-6 rounded-md mt-4">
    <div class="order-2 gap-6">
      <h1 href="" class="text-3xl mb-2 font-semibold">{{ $post->judul }}</h1>
      <div class="my-2 mt-6">
        <h3 class="mt-4 text-abu"><i class=" bi bi-calendar-check mr-2"></i>Tanggal Mulai : </h3>
        <div class="flex">
          <div class="field font-bold w-fit mt-2">{{ date('d F Y', strtotime($post->tgl_mulai)) }}</div>
          <div class="mx-4 field w-fit mt-2 border-green">{{ date('H:i', strtotime($post->tgl_mulai)) }} WIB</div>
        </div>
        <h3 class="mt-4 text-abu"><i class=" bi bi-calendar-check mr-2"></i>Tanggal Berakhir : </h3>
        <div class="flex">
          <div class="field font-bold w-fit mt-2">{{ date('d F Y', strtotime($post->tgl_berakhir)) }}</div>
          <div class="mx-4 field w-fit mt-2 border-red">{{ date('H:i', strtotime($post->tgl_berakhir)) }} WIB</div>
        </div>
        <h3 class="mt-4 text-abu"><i class="bi bi-geo-alt mr-2"></i>Tempat : </h3>
          <div class="field w-fit mt-2 border-green">{{$post->tempat}}</div>
        <h2 class="font-light flex-wrap mt-4 text-abu">Deskripsi :</h2>
        <p class="bg-blue bg-opacity-5 mt-2 py-4 px-4 rounded-md">{{ $post["deskripsi"] }}</p>
      </div>
    </div>
  </div>
  @endsection