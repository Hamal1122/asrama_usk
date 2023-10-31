@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="{{route ('beranda') }}" class="bi bi-arrow-left-short"></a>
    <h3>Beranda</h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-Inter px-4 py-4 rounded-md mt-4">
    <div class="order-2 gap-6">
      <a href="/post/{{ $post[ 'slug' ] }}" class="text-3xl mb-2">{{ $post["title"] }}</a>
      <div class="my-2 mt-6">
        <h3 class="font-semibold">Hari : <span>{{ $post["tanggal"] }}</span></h3>
        <h3>Mulai :<span>{{ $post["mulai"] }}</span><span> </span><span>WIB</span></h3>
        <h3>Selesai :<span>{{ $post["selesai"] }}</span><span> </span><span>WIB</span></h3>
        <h2 class="font-bold flex-wrap mt-4">Deskripsi :</h2>
        <p class="">{{ $post["deskripsi"] }}</p>
      </div>
    </div>
  </div>
  @endsection