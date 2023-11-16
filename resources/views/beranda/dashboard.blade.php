@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2   rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <h3 class="py-2">Beranda</h3>
  </div>


  <div class=" font-poppins font-bold bg-white text-purple px-8 rounded-md mt-4 flex flex-wrap justify-between items-center mx-auto my-auto py-6 mx-auto lg:py-4">
    <div>
      <h1 class="text-2xl md:text-3xl text-abu">Selamat Datang, di</h1>
      <h1 class="text-3xl md:text-5xl">Asrama USK</h1>
      <h1 class="text-sm md:text-base">Layanan Pengajuan Asrama Untuk Mahasiswa USK</h1>
    </div>
    <img class="w-[500px] h-fit" src="https://img.freepik.com/free-vector/college-student-dorm-interior-young-travelers-stopping-hostel-vector-illustration-alternative-accommodation-backpackers-house-trip-concept_74855-13027.jpg?w=1060&t=st=1699671045~exp=1699671645~hmac=d57656d8f43383b53f4363405b408914731d0dac52f67285fbb0fbc8baac2b05" alt="">
  </div>


  <div class="bg-purple text-white p-4 mt-6 rounded-md">
    <h1 class="font-Inter text-sm">Informasi Kegiatan :</h1>
  </div>

  @foreach ($data as $post)

  <div class="bg-white text-gray-dark text-sm font-poppins px-4 py-4 rounded-md mt-4">
    <div class="order-2 gap-6">
      <h1 class="text-3xl mb-2 text-purple">{{ $post->judul }}</h1>
      <div class="my-2">
        <h3>Waktu : <span class="font-bold"> {{ $post->time }} <span>WIB</span> </span></h3>
        <h3>Mulai : <span class="font-bold">{{ $post->tgl_mulai }}</span></h3>
        <h3>Selesai : <span class="font-bold">{{ $post->tgl_berakhir }}</h3>
      </div>
      <div class="mt-4">
        <a class="bg-purple bg-opacity-25 text-purple px-4  py-2 rounded-md hover:bg-purple hover:text-white transition-all" href="/post/{{ $post[ 'id' ] }}">Lihat</a>
      </div>

    </div>
  </div>

  @endforeach

  @endsection