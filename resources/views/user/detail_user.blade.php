@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{route ('manage_user') }}" class=" bi bi-arrow-left-short px-2 my-auto hover:bg-blue hover:px-4 text-xl rounded-md transition-all"></a>
    <h3 class="py-2">Detail User</h3>
  </div>

  <div class="bg-white p-4 mt-4 rounded-md ">
    <div class="text-base text-gray-dark mb-6 font-semibold">
        <h1>Biodata</h1>
    </div>
    <div class="text-sm text-gray-dark mt-2">
        <h1>Nama&nbsp;&nbsp;: <span class="font-semibold">{{$data->user->name}}</span></h1>
    </div>
    <div class="text-sm text-gray-dark mt-2">
        <h1>NIM&nbsp;&nbsp;: <span class="font-semibold">{{$data->user->nim}}</span></h1>
    </div>
    <div class="text-sm text-gray-dark mt-2">
        <h1>Email&nbsp;&nbsp;:  <span class="font-semibold">{{$data->user->email}}</span></h1>
    </div>
    <div class="text-sm text-gray-dark mt-2">
        <h1>No.HP&nbsp;&nbsp;: <span class="font-semibold">{{$data->user->no_hp}}</span></h1>
    </div>
    <div class="text-sm text-gray-dark mt-2">
        <h1>Kategori&nbsp;&nbsp;:  <span class="font-semibold">{{$data->kategori}}</span></h1>
    </div>
    <div class="text-sm text-gray-dark mt-2">
        <h1>Jenis Kelamin&nbsp;&nbsp;:  <span class="font-semibold">{{$data->user->jenis_kelamin}}</span></h1>
    </div>
  </div>

<div class="py-6 px-4 bg-white my-4 rounded-md">
    <h1 class="text-gray-dark font-semibold text-base">Riwayat :</h1>
  <div class="bg-white p-4 mt-4 rounded-md text-gray-dark font-poppins drop-shadow-md">

        <div class="mt-4 text-xs">
             Gedung : <span class="text-abu">{{$data->kamar->gedung->nama}}</span>
        </div>
        <div class="mt-4 text-xs">
             Kamar : <span class="text-abu">{{$data->kamar->nama}}</span>
        </div>
        <div class="mt-4 text-xs">
            Tanggal Masuk :  <span class="text-green">{{ date('d F Y', strtotime($data->tanggal_masuk)) }}</span>
        </div>
        <div class="mt-4 text-xs">
            Tanggal Keluar : <span class="text-red">{{ date('d F Y', strtotime($data->tanggal_keluar)) }}</span>
        </div>
        <div class="mt-4 text-xs">
        @if($data->status == 0)
            Status : <span class="bg-green text-green bg-opacity-20 w-fit rounded-full px-4 font-poppins">Aktif </span>
        @elseif($data->status == 1)
            Status : <span class="bg-red text-red bg-opacity-20 w-fit rounded-full px-4 font-poppins">Nonaktif </span>
        @endif
        </div>
  </div>

</div>
  @endsection