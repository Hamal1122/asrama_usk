@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Manage Informasi</h3>
  </div>


    @if ($message = Session::get('berhasil'))
    <div class="bg-green bg-opacity-10 text-green px-4  py-4 rounded-md mt-2"><i class="bi bi-check-circle-fill px-2"></i>{{ $message }}</div>
    @endif

  <div class="p-4 bg-gray-soft my-4 rounded-md">
    <div class="my-4">
      <a class="button bg-green hover:bg-tahiti py-2 px-4 " href="{{route ('tambahInformasi') }}"><i class="bi bi-plus"></i>Tambah</a>
    </div>

    <div>
      <h1 class="font-Inter text-sm mt-6 ">Data Informasi :</h1>
    </div>

  @foreach ($data as $post)
  <div class="bg-white text-gray-dark text-sm font-poppins px-4 py-4 rounded-md mt-4">
    <div class="order-2 gap-6">
      <a  class="text-3xl mb-2 text-purple">{{ $post->judul }}</a>
      <div class="my-2 text-gray-dark">
        <h3>Waktu :  <span class="font-bold"> {{ $post->time }} <span>WIB</span> </span> </h3>
        <h3>Mulai :    <span class="font-bold">{{ $post->tanggal_mulai }}</span></h3>
        <h3>Selesai :  <span class="font-bold">{{ $post->tanggal_selesai }}</span></h3>
        <h3 class="mt-4">Deskripsi :  </h3>
        <p class="bg-blue bg-opacity-10 mt-2 py-4 px-4 rounded-md">{{ $post->deskripsi }}</p>
        <div class="flex gap-4 mt-4">
          <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/tampil_informasi/{{ $post->id }}" ><i class="bi bi-pencil-square mx-2"></i>Edit</a>
          <a href="/delete_informasi/{{ $post->id }}" class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all" type=""><i class="bi bi-trash-fill mx-2"></i>Delete</a>
        </div>
      </div>

    </div>
  </div>
  @endforeach
  </div>

  @endsection