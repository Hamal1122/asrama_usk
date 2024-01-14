@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{route ('semuagedung') }}" class="bi bi-arrow-left-short px-2 my-auto hover:bg-blue hover:px-4 text-xl rounded-md transition-all"></a>
    <h3 class="py-2">Kamar</h3>
  </div>

  <div class=" mt-3 py-4  rounded-md bg-white px-6 flex justify-between">
    <div>
      <div>
        <h1 class="text-abu">Pengawas :</h1>
      </div>
        <div class="mt-2 font-Inter text-blue">
          @foreach ($pengawas as $data)
          <h1 class="bg-abu bg-opacity-10 text-abu py-1 px-2 rounded-lg w-fit"><i class="bi bi-person-fill mr-2"></i>{{ $data->nama}} <span>- 0{{ $data->no_hp}} </span></h1>
          @endforeach
        </div>
    </div>
  </div>

  <div class="bg-gray-soft flex flex-wrap p-4 mt-4 font-light text-sm text-gray-dark gap-4 container mx-auto">

    @foreach ( $kamar as $kamar )
    <div class=" bg-white p-4 rounded-md">
      <div>
        <img class="w-[240px] h-fit rounded-md" src="https://img.freepik.com/free-vector/home-interior-background-theme_23-2148647102.jpg?w=1060&t=st=1700195447~exp=1700196047~hmac=1ddae94ec8b8af95ed88a89a734c52ff005ecf81862a1c80f94fffaedf14d926" alt="">
      </div>
      <div>
        <h1 class="mt-2 font-semibold text-sm">{{ $kamar -> nama }}</h1>
      </div>
      <div class="mt-2 text-xs">
        <div class="flex items-center gap-2">
          <div>
            <h3 class="bg-blue bg-opacity-10 text-purple py-1 px-2 rounded-lg w-fit">{{ $kamar->gedung->nama }}</h3>
          </div>
          <div>
            <h3 class="bg-blue bg-opacity-10 text-purple py-1 px-2 rounded-lg w-fit">{{ $kamar->gedung->kategori_gedung }}</h3>
          </div>
        </div>
        <h3 class="mt-2 bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit"><span class="text-green">Kapasitas : </span><span class="text-gray-dark">{{ $kamar->jumlahpenghuni }} / </span>{{ $kamar->kapasitas }} Orang</h3>
      </div>
      <div class="mt-8 w-full flex justify-between text-xs">
        <a href="/info_kamar/{{ $kamar[ 'id' ] }}" class="text-center bg-purple  hover:px-10 hover:text-white text-white px-8 py-2 rounded-md transition-all focus:scale-95">Detail</a>
      </div>
    </div>
    @endforeach
  </div>


  @endsection