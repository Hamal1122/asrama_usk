@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2   rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <h3 class="py-2">Beranda</h3>
  </div>

 
  <div class="text-3xl font-Inter font bg-purple text-white p-4 rounded-md mt-4">Selamat Datang,<span>  </span></div>
 

  <div>
    <h1 class="font-Inter text-sm mt-6 px-4">Informasi Kegiatan :</h1>
  </div>

  @foreach ($data as $post)
  <div class="bg-white text-gray-dark text-sm font-poppins px-4 py-4 rounded-md mt-4">
    <div class="order-2 gap-6">
      <h1 class="text-3xl mb-2 text-purple">{{ $post->judul }}</h1>
      <div class="my-2">
        <h3>Waktu : <span class="font-bold"> {{ $post->time }} <span>WIB</span> </span></h3>
        <h3>Mulai : <span class="font-bold">{{ $post->tanggal_mulai }}</span></h3>
        <h3>Selesai : <span class="font-bold">{{ $post->tanggal_selesai }}</h3>
      </div>
      <div class="mt-4">
        <a class="bg-purple bg-opacity-25 text-purple px-4  py-2 rounded-md hover:bg-purple hover:text-white transition-all" href="/post/{{ $post[ 'id' ] }}">Lihat</a>
      </div>

    </div>
  </div>
  @endforeach

  @endsection

 