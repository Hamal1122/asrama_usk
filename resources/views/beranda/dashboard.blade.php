@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Beranda </h3>
  </div>


  <div class=" font-poppins font-bold bg-white text-purple px-8 rounded-md mt-4 flex flex-wrap justify-between items-center mx-auto my-auto py-6 mx-auto lg:py-4">
    <div>
      <h1 class="text-2xl md:text-3xl text-abu">Selamat Datang, di</h1>
      <h1 class="text-3xl md:text-5xl">Asrama USK</h1>
      <h1 class="text-sm md:text-base">Layanan Pengajuan Asrama Untuk Mahasiswa USK</h1>
    </div>
    <img class="w-[500px] h-fit" src="https://img.freepik.com/free-vector/college-student-dorm-interior-young-travelers-stopping-hostel-vector-illustration-alternative-accommodation-backpackers-house-trip-concept_74855-13027.jpg?w=1060&t=st=1699671045~exp=1699671645~hmac=d57656d8f43383b53f4363405b408914731d0dac52f67285fbb0fbc8baac2b05" alt="">
  </div>


  <div class="bg-white text-purple p-4 mt-6 rounded-md">
    <h1 class="font-Inter text-sm">Informasi Kegiatan :</h1>
  </div>

  @foreach ($data as $post)
  <div class="py-4">
    <div class="bg-white text-gray-dark text-sm font-poppins px-4 py-4 rounded-md">
      <div class="order-2 gap-6">
        <div class="flex justify-between">
          <div>
            <h1 class="text-3xl mb-2 text-gray-dark">{{ $post->judul }}</h1>
          </div>
          <div>
            <h1 class="text-xs font-light bg-abu bg-opacity-10 text-abu py-1 px-2 rounded-lg w-fit">24 Jam yang lalu</h1>
          </div>
        </div>
        <div class="my-2">
          <h3 class="mt-4 text-abu ">Waktu : <span class="font-thin  bg-blue bg-opacity-10 text-blue py-1 px-2 rounded-lg w-fit">{{ $post->time }} <span>WIB</span> </span></h3>
          <h3 class="mt-2 text-abu">Mulai : <span class="font-thin  bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit">{{ $post->tgl_mulai }}</span></h3>
          <h3 class="mt-2 text-abu">Selesai : <span class=" font-thin  bg-red bg-opacity-10 text-red py-1 px-2 rounded-lg w-fit">{{ $post->tgl_berakhir }}</h3>
        </div>
        <div class="mt-6">
          <a class="bg-purple bg-opacity-25 text-purple px-4  py-2 rounded-md hover:bg-purple hover:text-white transition-all" href="/post/{{ $post[ 'id' ] }}">Lihat</a>
        </div>

      </div>
    </div>
  </div>

  @endforeach

  @endsection