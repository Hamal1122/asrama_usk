@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Profile</h3>
  </div>

  <div class="bg-white py-4 mt-4 rounded-md ">
    <div class="p-4flex gap-4 flex-wrap justify-between">

      <div class="my-auto flex flex-wrap text-gray-dark font-Inter mx-auto md:mx-4 w-1/2">

        <div class="mx-auto md:mx-4 font-poppins container">
          <div class="mt-4 w-full">
            <h3 class="my-2">Nama </h3>
            <div class="field w-full">
              <h3 class="font-bold">{{Auth::user()->name}}</h3>
            </div>
          </div>

          <div class="mt-4 w-full">
            <h3 class="my-2">NIM / NPM </h3>
            <div class="field ">
              <h3 class="font-bold">{{Auth::user()->nim}}</h3>
            </div>
          </div>

          <div class="mt-4">
            <h3 class="my-2">No. telp </h3>
            <div class="field">
              <h3 class="font-bold">{{Auth::user()->no_hp}}</h3>
            </div>
          </div>

          <div class="mt-4">
            <h3 class="my-2">Program Studi </h3>
            <div class="field">
              <h3 class="font-bold">Informatika</h3>
            </div>
          </div>

          <div class="mt-4">
            <h3 class="my-2">Email </h3>
            <div class="field">
              <h3 class="font-bold">{{Auth::user()->email}}</h3>
            </div>
          </div>

          <div class="mt-4">
            <h3 class="my-2">Jenis Kelamin </h3>
            <div class="field">
              <h3 class="font-bold">{{Auth::user()->jenis_kelamin}}</h3>
            </div>
          </div>
         
        </div>


      </div>
    </div>

  </div>
  @foreach ($data as $data)
  <div class="mt-4 text-gray-dark font-poppins bg-white p-4 rounded-md">
    <h3>Riwayat :</h3>
  
    
    @if($data->kamar_id !== 0)
    <div class="bg-white p-4 mt-2 rounded-md text-gray-dark  border border-dashed  font-poppins">
      <div class="flex justify-between w-full items-center">
        <h1 class="text-xl font-bold text-gray-dark">{{$data->kamar->nama}}</h1>
        <div class="font-poppins">
          @if($data->status == 0)
          <h3 class="bg-green bg-opacity-20 text-green text-xs py-1 px-4 w-fit rounded-full">Aktif</h3>
          @elseif($data->status == 1)
          <h3 class="bg-abu bg-opacity-20 text-abu text-xs py-1 px-4 w-fit rounded-full">Nonaktif</h3>
          @endif
        </div>
    </div>
      <h1 class="mt-4">Gedung {{$data->kamar->gedung->nama}}</h1>
      <p class="text-abu text-xs mt-2">Mulai : {{ date('d F Y', strtotime($data->tanggal_masuk)) }}</p>
      <p class="text-abu text-xs ">Berakhir : {{ date('d F Y', strtotime($data->tanggal_keluar)) }}</p>
    </div>
</div>
  @endif
  @endforeach


  @endsection