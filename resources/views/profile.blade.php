@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Profile</h3>
  </div>
  <div class="bg-white py-4 mt-4 rounded-md ">
    <div class="p-4 bg-white flex gap-4 flex flex-wrap justify-between">

      <div class="my-auto flex flex-wrap text-gray-dark font-Inter mx-auto md:mx-4">

        <div class="mx-auto md:mx-0">
          <img class="w-fit h-40 rounded-lg mx-auto md:mx-4 my-2" src="https://akcdn.detik.net.id/community/media/visual/2022/12/31/cristiano-ronaldo-4.jpeg?w=700&q=90" alt="">
        </div>

        @foreach ($data as $user)

        <div class="mx-auto md:mx-4">
          <h3 class="my-2">Nama : <span class="font-bold">{{ $user->nama }}</span></h3>
          <h3 class="my-2">NIM : <span class="font-bold">{{ $user->nim }}</span></h3>
          <h3 class="my-2">No.Telpon : <span class="font-bold">{{ $user->no_hp }}</span></h3>
          <h3 class="my-2">Program Studi : Informatika</h3>
          <h3 class="my-2">Email : <span class="font-bold">{{ $user->email }}</span></h3>
          <h3 class="my-2">Gender : <span class="font-bold">{{ $user->jenis_kelamin }}</span></h3>
        </div>


        @endforeach

    </div>
  </div>

  </div>
  <div class="bg-white p-4 mt-4 rounded-md text-gray-dark font-Inter">
    <h1 class="text-xl font-bold text-purple">KAMAR 201</h1>
    <h1>Gedung Rusunawa A</h1>
    <p class="text-abu text-xs">Mulai : 1 Januari 2024</p>
    <p class="text-abu text-xs">Berakhir : 1 Januari 2025</p>
    <div class="mt-4">
        <a class="bg-purple bg-opacity-25 text-purple px-4  py-2 rounded-md hover:bg-purple hover:text-white transition-all" href="{{route ('kamarsaya') }}">lihat</a>
      </div>
  </div>

  @endsection