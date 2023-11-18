@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Profile</h3>
  </div>

  <div class="bg-white py-4 mt-4 rounded-md ">
    <div class="p-4 bg-white flex gap-4 flex flex-wrap justify-between">

      <div class="my-auto flex flex-wrap text-gray-dark font-Inter mx-auto md:mx-4">

        <div class="mx-auto md:mx-0">
          <img class="w-fit h-40 rounded-lg mx-auto md:mx-4 my-2" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=740&t=st=1699936801~exp=1699937401~hmac=883762c143dedf41e5f36ab2e7bcd6a83f365cf5fce75ee25d84e753bfaa086c" alt="">
        </div>



        <div class="mx-auto md:mx-4">
          <h3 class="my-2">Nama : <span class="font-bold">{{Auth::user()->name}}</span></h3>
          <h3 class="my-2">NIM : <span class="font-bold">{{Auth::user()->nim}}</span></h3>
          <h3 class="my-2">No.Telpon : <span class="font-bold">{{Auth::user()->no_hp}}</span></h3>
          <h3 class="my-2">Program Studi : <span class="font-bold">Informatika</span> </h3>
          <h3 class="my-2">Email : <span class="font-bold">{{Auth::user()->email}}</span></h3>
          <h3 class="my-2">Gender : <span class="font-bold">{{Auth::user()->jenis_kelamin}}</span></h3>
        </div>


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