@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2"> Beranda</h3>
  </div>

  <div class="flex flex-wrap mt-4 gap-8 bg-white rounded-md  px-6 py-8">
    <div class=" bg-white   font-poppins text-gray-dark py-4 px-8 rounded-2xl text-center flex gap-8 items-center drop-shadow-md w-60 ">
      <div class=" text-left">
        <h3 class=" font-bold text-2xl text-gray-dark">{{ $jumlah_gedung }} <span class="font-light text-base">Gedung</span></h3>
        <h1 class="text-yellow text-xs font-extralight ">Total Gedung</h1>
      </div>
    </div>

    <div class=" bg-white   font-poppins text-gray-dark py-4 px-8 rounded-2xl text-center flex gap-8 items-center drop-shadow-md w-60 ">
      <div class=" text-left">
        <h3 class=" font-bold text-2xl text-gray-dark">{{ $jumlah_kamar }} <span class="font-light text-base text-abu">Kamar</span></h3>
        <h1 class="text-yellow text-xs font-extralight ">Total Kamar</h1>
      </div>
    </div>

    <div class=" bg-white   font-poppins text-gray-dark py-4 px-8 rounded-2xl text-center flex gap-8 items-center drop-shadow-md w-60 ">
      <div class=" text-left">
        <h3 class=" font-bold text-2xl text-gray-dark">{{ $jumlah_postingan }} <span class="font-light text-base">Postingan</span></h3>
        <h1 class="text-yellow text-xs font-extralight ">Total Postingan</h1>
      </div>
    </div>

    <div class=" bg-white   font-poppins text-gray-dark py-4 px-8 rounded-2xl text-center flex gap-8 items-center drop-shadow-md w-60 ">
      <div class=" text-left">
        <h3 class=" font-bold text-2xl text-gray-dark">{{ $jumlah_pengguna }}<span class="font-light text-base"> Pengguna</span></h3>
        <h1 class="text-yellow text-xs font-extralight ">Total Pengguna</h1>
      </div>
    </div>
  </div>

  <div class="container mx-auto py-4 rounded-md">
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-6 px-6 py-4 rounded-md gap-2 flex-col flex text-gray-dark w-full h-96 bg-white">
        <div class="flex justify-between">
          <div>
            <h1 class="">Data Gedung</h1>
            <h3 class="text-xs text-green font-light">terakhir ditambahkan</h3>
          </div>
          <a href="{{route ('manage_kamar') }}" class="py-2 text-blue mb-4">More</a>
        </div>
        @foreach ($lastpost as $lastpost)
        <div class="flex bg-bermuda justify-between px-6 py-4 rounded-lg font-light text-sm">
          <h1>{{ $lastpost -> nama }}</h1>
          <h1 class="text-green  rounded-full">{{ $lastpost -> kategori_gedung }}</h1>
          <h1>{{ $lastpost -> updated_at->format('d, M Y H:i') }}</h1>
        </div>
        @endforeach
      </div>


      <!-- Form Pengajuan Kamar -->
      <div class="col-span-6 ">
        <div class="col-span-6 px-6 py-4 rounded-md gap-2 flex-col flex text-gray-dark w-full h-96 bg-white">
          <div class="flex justify-between">
            <div>
              <h1 class="">Belum Diverifikasi</h1>
              <h3 class="text-xs text-green font-light">Data Pengajuan Kamar</h3>
            </div>
            <a href="" class="py-2 text-blue mb-4 font-light text-sm">More</a>
          </div>
          <div class="flex bg-bermuda justify-between px-6 py-4 rounded-lg">
          @foreach ($berkas as $berkas)
            @if($berkas->status == 0)
            <h1>{{$berkas->user_id}} - {{ $berkas -> nama_berkas }}</h1>
            <h1></h1>
            <h1></h1>
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection