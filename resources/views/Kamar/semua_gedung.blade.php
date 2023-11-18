@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Semua Kamar</h3>
  </div>

  <div class="bg-gray-soft flex flex-wrap p-4 mt-4 font-light text-sm text-gray-dark gap-4 container mx-auto">
    @foreach ($gedung as $gedung)
    <div class=" bg-white p-4 rounded-md">
      <div>
        <img class="w-[240px] h-fit rounded-md" src="https://img.freepik.com/free-vector/home-interior-background-theme_23-2148647102.jpg?w=1060&t=st=1700195447~exp=1700196047~hmac=1ddae94ec8b8af95ed88a89a734c52ff005ecf81862a1c80f94fffaedf14d926" alt="">
      </div>
      <div>
        <h1 class="mt-2 font-semibold text-base">{{ $gedung->nama }}</h1>
      </div>
      <div class="mt-2">
        <h3 class="bg-blue bg-opacity-10 text-purple py-1 px-2 rounded-lg w-fit font-extralight">{{ $gedung->kategori_gedung }}</h3>
        <h3 class="mt-2 bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit font-extralight">25 Kamar</h3>
      </div>
      <div class="mt-4 w-full">
        <button class="bg-purple bg-opacity-25 text-purple px-4  py-2 rounded-md hover:bg-purple hover:text-white transition-all w-full"><a href="/semuakamar/{{ $gedung[ 'id' ] }}">Lihat</a></button>
      </div>
    </div>
    @endforeach
  </div>


  @endsection