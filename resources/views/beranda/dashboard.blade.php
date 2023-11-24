@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Beranda </h3>
  </div>

  <div class="bg-white p-4 text-sm font-extralight lg:hidden mt-4 rounded-md text-abu items-center">
    <h1>Halo, {{ Auth::user()->name }}</h1>
  </div>


  <div class=" font-poppins font-bold bg-white text-purple px-8 rounded-md mt-4 flex flex-wrap justify-between items-center mx-auto my-auto py-6 mx-auto lg:py-4">
    <div>
      <h1 class="text-2xl md:text-3xl text-abu">Selamat Datang, di</h1>
      <h1 class="text-3xl md:text-5xl">Asrama USK</h1>
      <h1 class="text-sm md:text-base">Layanan Pengajuan Asrama Untuk Mahasiswa USK</h1>
    </div>
    <img class="w-[500px] h-fit" src="https://img.freepik.com/free-vector/college-student-dorm-interior-young-travelers-stopping-hostel-vector-illustration-alternative-accommodation-backpackers-house-trip-concept_74855-13027.jpg?w=1060&t=st=1699671045~exp=1699671645~hmac=d57656d8f43383b53f4363405b408914731d0dac52f67285fbb0fbc8baac2b05" alt="">
  </div>

  <!-- collapse content -->
  <div class="relative w-full overflow-hidden mt-4 ">
    <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12  cursor-pointer opacity-0">
    <div class="bg-purple rounded-md h-12 w-full flex items-center p-4">
      <h1 class="text-white text-base font-light">Panduan Pengajuan Kamar</h1>
    </div>

    <!-- arrow -->
    <div class="absolute top-3 right-3 text-white transition-transform duration-500  rotate-0 peer-checked:rotate-180">
      <ion-icon name="chevron-down-outline" class="text-lg"></ion-icon>
    </div>

    <!-- content -->
    <div class="bg-white overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-[1000px] rounded-md mt-1 text-gray-dark">
      <div class="p-4 py-8">

        <div class="flex flex-wrap gap-2 md:gap-8 items-center px-6 ">
          <div>
            <div class="bg-blue text-blue bg-opacity-20 px-2 py-1 rounded-lg text-sm font-thin ">Tahap 1</div>
          </div>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg"> Melengkapi berkas yang dibutuhkan untuk pengajuan kamar di menu <a class="text-blue" href="{{route ('berkas') }}">Pengajuan Berkas</a> .</p>
          </div>
        </div>

        <div class="flex flex-wrap gap-2 md:gap-8 items-center px-6 mt-8">
          <div>
            <div class="bg-blue text-blue bg-opacity-20 px-2 py-1 rounded-lg text-sm font-thin ">Tahap 2</div>
          </div>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg">Melengkapi formulir pengajuan kamar untuk mengajukan kamar ke pihak Asrama USK . </p>
          </div>
        </div>

        <div class="flex flex-wrap gap-2 md:gap-8 items-center px-6 mt-8">
          <div>
            <div class="bg-blue text-blue bg-opacity-20 px-2 py-1 rounded-lg text-sm font-thin ">Tahap 3</div>
          </div>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg">Pihak Asrama USK mengecek dan memvalidasi bahwa data yang anda upload lengkap dan sesuai.</p>
          </div>
        </div>

        <div class="flex flex-wrap gap-2 md:gap-8 items-center px-6 mt-8">
          <div>
            <div class="bg-blue text-blue bg-opacity-20 px-2 py-1 rounded-lg text-sm font-thin ">Tahap 4</div>
          </div>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg">Setelah data anda telah diverifikasi oleh pihak Asrama USK , anda dapat langsung menyelesaikan proses pembayaran dalam waktu 1 x 24 Jam</p>
          </div>
        </div>

        <div class="flex flex-wrap gap-2 md:gap-8 items-center px-6 mt-8">
          <div>
            <div class="bg-blue text-blue bg-opacity-20 px-2 py-1 rounded-lg text-sm font-thin ">Tahap 5</div>
          </div>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg">Setelah semua proses diatas selesai , pihak Asrama USK akan menyediakan kamar kepada anda yang bisa dilihat di menu <a class="text-blue" href="{{route ('kamarsaya') }}">Kamar Saya</a></p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End collapse content -->

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
            <h1 class="text-xs font-light bg-abu bg-opacity-10 text-abu py-1 px-2 rounded-lg w-fit">Posted {{ $post->created_at->diffForHumans() }}</h1>
          </div>
        </div>
        <div class="my-2">
          <h3 class="mt-4 text-abu "><i class="bi bi-alarm mr-2"></i>Waktu : <span class="font-thin  bg-blue bg-opacity-10 text-blue py-1 px-2 rounded-lg w-fit">{{ $post->time }} <span>WIB</span> </span></h3>
          <h3 class="mt-4 text-abu"><i class="bi bi-calendar-check mr-2"></i>Tanggal Mulai : <span class="font-thin  bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit">{{ $post->tgl_mulai }}</span></h3>
          <h3 class="mt-4 text-abu"><i class="bi bi-calendar-x mr-2"></i>Tanggal Selesai : <span class=" font-thin  bg-red bg-opacity-10 text-red py-1 px-2 rounded-lg w-fit">{{ $post->tgl_berakhir }}</h3>
          <h3 class="mt-4 text-abu"><i class="bi bi-geo-alt mr-2"></i>Tempat : <span class=" font-thin  bg-abu bg-opacity-10 text-abu py-1 px-2 rounded-lg w-fit">{{ $post->tempat }}</h3>
        </div>
        <div class="mt-8">
          <a class="text-center bg-purple hover:text-white hover:px-10 text-white px-8 py-2 rounded-md transition-all focus:scale-95" href="/post/{{ $post[ 'id' ] }}">Lihat</a>
        </div>

      </div>
    </div>
  </div>

  @endforeach

  @endsection