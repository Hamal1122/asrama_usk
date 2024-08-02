@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div
    class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{ Session::get('halaman_url') }}"
      class=" bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">{{ $data->nama }}</h3>
  </div>

  <div class="flex gap-4 mb-4">
    <div
      class="bg-white text-gray-dark text-sm font-Inter px-6 py-6  rounded-md mt-4  shadow-md w-3/4">
      <div class>
        <div
          class="bg-abu bg-opacity-20 p-10 mx-auto text-center font-poppins text-3xl rounded-md font-bold text-abu">
          <h1>{{ $data->nama }}</h1>
        </div>
        <div class="mt-6">
          <h1 class="text-2xl font-bold font-poppins">{{ $data->nama }}</h1>
        </div>

        <div class="mt-3 font-Inter">
          <div>
            <h1 class="mt-4">Kapasitas</h1>
            <div class="field">{{ $data->kapasitas }} Orang</div>
          </div>
          <div>
            <h1 class="mt-4">Gedung</h1>
            <div class="field">{{ $data->gedung->nama }}</div>
          </div>
          <div>
            <h1 class="mt-4">Kategori</h1>
            <div class="field">{{ $data->gedung->kategori_gedung }}</div>
          </div>
          
          <div>
            <h1 class="mt-4">Harga Kamar</h1>
            <div class="field">Rp. 4.800.000</div>
          </div>

          <div>
            <h1 class="mt-4">Harga perorangan</h1>
            <div class="field">{{$data->formatRupiah('harga')}}</div>
          </div>

        </div>
      </div>
    </div>

    <div class="bg-white py-2 px-4 mt-4 rounded-md w-1/4">
      <div class="  py-4  rounded-md">
        <h1 class="text-abu font-poppins font-semibold text-center">Penghuni
          :</h1>
        <div class="mt-6 font-Inter text-blue">
          @foreach ($penghuni as $p)
          <h1
            class="bg-blue mt-2 bg-opacity-10 text-blue py-1 px-2 rounded-lg w-fit"><i
              class="bi bi-person-fill mr-2"></i>{{ $p->user->name }}</h1>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  @endsection