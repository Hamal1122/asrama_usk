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

        <div class="flex gap-8 items-center px-6">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-1-square-fill text-abu " viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm7.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
            </svg>
          </div>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg"> Melengkapi berkas yang dibutuhkan untuk pengajuan kamar di menu <a class="text-blue" href="{{route ('berkas') }}">Pengajuan Berkas</a> .</p>
          </div>
        </div>

        <div class="flex gap-8 items-center px-6 mt-8">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-2-square-fill text-abu" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm4.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z" />
          </svg>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg">Melengkapi formulir pengajuan kamar untuk mengajukan kamar ke pihak Asrama USK . </p>
          </div>
        </div>

        <div class="flex gap-8 items-center px-6 mt-8">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-3-square-fill text-abu" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm5.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z" />
          </svg>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg">Pihak Asrama USK mengecek dan memvalidasi bahwa data yang anda upload lengkap dan sesuai.</p>
          </div>
        </div>

        <div class="flex gap-8 items-center px-6 mt-8">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-4-square-fill text-abu" viewBox="0 0 16 16">
            <path d="M6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm5.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265Z" />
          </svg>
          <div>
            <p class="font-light text-sm bg-gray-dark bg-opacity-5 px-2 py-2 rounded-lg">Setelah data anda telah diverifikasi oleh pihak Asrama USK , anda dapat langsung menyelesaikan proses pembayaran dalam waktu 1 x 24 Jam</p>
          </div>
        </div>

        <div class="flex gap-8 items-center px-6 mt-8">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-5-square-fill text-abu" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm5.994 12.158c-1.57 0-2.654-.902-2.719-2.115h1.237c.14.72.832 1.031 1.529 1.031.791 0 1.57-.597 1.57-1.681 0-.967-.732-1.57-1.582-1.57-.767 0-1.242.45-1.435.808H5.445L5.791 4h4.705v1.103H6.875l-.193 2.343h.064c.17-.258.715-.68 1.611-.68 1.383 0 2.561.944 2.561 2.585 0 1.687-1.184 2.806-2.924 2.806Z" />
          </svg>
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