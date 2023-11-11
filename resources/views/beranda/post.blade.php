@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2   rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="{{route ('beranda') }}" class=" bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Beranda</h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-Inter px-4 py-4 rounded-md mt-4">
    <div class="order-2 gap-6">
      <a href="" class="text-3xl mb-2">{{ $post->judul }}</a>
      <div class="my-2 mt-6">
        <h3>Waktu : <span class="font-bold">{{ $post->time }}</span><span class="font-bold"> WIB</span></h3>
        <h3>Mulai :<span class="font-bold">{{ $post->tgl_mulai }}</h3>
        <h3>Selesai :<span class="font-bold">{{ $post->tgl_berakhir }}</h3>
        <h2 class="font-bold flex-wrap mt-4">Deskripsi :</h2>
        <p class="bg-blue bg-opacity-10 mt-2 py-4 px-4 rounded-md">{{ $post["deskripsi"] }}</p>
      </div>
    </div>
  </div>
  @endsection