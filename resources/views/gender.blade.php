@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4 ">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Kamar</h3>
  </div>

<div class="bg-blue text-white text-sm font-poppins px-4 py-2 rounded-md flex gap-6 mt-4">
  <div class="order-2 gap-6">
    <h3>Penting :</h3>
    <p>Silahkan memilih Gender sesuai dengan data diri yang kamu miliki untuk melanjutkan ke menu selanjutnya, dimohon untuk teliti dalam memilih.</p>
  </div>
  <i class="bi bi-info-circle-fill order-1 my-auto"></i>
</div>

<div class="my-2 font-poppins text-sm text-blue">
  <h3>Silahkan memilih Jenis Kelamin Anda :</h3>
</div>

<div class="bg-white py-4 my-2 rounded-md px-4 text-md hover:bg-green transition-all hover:text-white font-poppins text-green flex gap-4 cursor-pointer">
  <i class="bi bi-gender-male"></i>
  <h3>Laki-laki</h3>
</div>

<div class="bg-white py-4 my-2 rounded-md transition-all hover:bg-pink hover:text-white px-4 text-md font-poppins text-pink flex gap-4 cursor-pointer ">
  <i class="bi bi-gender-female"></i>
  <h3>Perempuan</h3>
</div>
@endsection