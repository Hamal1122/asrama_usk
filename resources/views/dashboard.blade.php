@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Beranda</h3>
  </div>

@foreach ($Beranda as $post)
  <div class="bg-white text-gray-dark text-sm font-poppins px-4 py-4 rounded-md mt-4">
    <div class="order-2 gap-6">
      <h1 class="text-3xl mb-2">{{ $post["title"] }}</h1>
      <div class="my-2">
        <h3>Mulai :<span>{{ $post["mulai"] }}</span><span> </span><span>WIB</span></h3>
        <h3>Selesai :<span>{{ $post["selesai"] }}</span><span> </span><span>WIB</span></h3>
      </div>
      <a class="button " href="">More</a>
    </div>
  </div>
  @endforeach

  @endsection
