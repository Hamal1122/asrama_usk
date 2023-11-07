@extends('Layout.main')

@section('title')

<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Kamar </h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-poppins px-4  py-2 rounded-md flex gap-6 mt-4">
    <div class="order-2">
      <h3 class="text-abu">Laki-laki</h3>
    </div>
    <i class="bi bi-info-circle-fill order-1 my-auto"></i>
  </div>

  <div class="my-2 font-poppins text-sm text-blue px-4">
    <h3>Silahkan memilih Gedung</h3>
  </div>

  <div class="bg-gray-soft p-4 flex flex-wrap gap-4">
    @foreach ($gedung as $gedung)
    <div class="bg-white shadow-md py-6 px-9 mt-4 w-fit rounded-lg">
      <img class="w-[200px] h-24 rounded-lg" src="https://img.freepik.com/free-vector/student-bedroom-dormitory-with-bunk-bed-desk-chair_88138-1025.jpg?w=1380&t=st=1699285608~exp=1699286208~hmac=853eb028060ddd726290de15a8b85c0c9720280f7d0af703be7a1e1edcdc70d5  " alt="">
      <div class="font-Inter text-gray-dark mt-6">
        <h1 class="text-base font-bold">{{ $gedung->nama }} </h1>
        <h3 class="text-abu">25 Kamar</h3>
        <button class="button2 w-full mt-4">Pilih</button>
      </div>
    </div>
    @endforeach
  </div>
  @endsection