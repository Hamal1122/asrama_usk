@extends('Layout.main')

@section('title')

<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Kamar</h3>
  </div>

  <div class="bg-white text-gray-dark text-sm font-poppins px-4  py-2 rounded-md flex gap-6 mt-4">
    <div class="order-2">
      <h3>Penting :</h3>
      <p>Khusus mahasiswa Disabilitas diwajibkan untuk memilih kamar berwarna <span class=" badge bg-green">Hijau</span></p>
      <p>Khusus mahasiswa International diwajibkan untuk memilih kamar berwarna <span class="badge bg-yellow">Kuning</span></p>
    </div>
    <i class="bi bi-info-circle-fill order-1 my-auto"></i>
  </div>

  <div class="my-2 font-poppins text-sm text-blue px-4">
    <h3>Silahkan memilih kamar</h3>
  </div>

  @endsection

  