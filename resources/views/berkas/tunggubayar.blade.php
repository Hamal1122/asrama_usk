@extends('Layout.main')

@section('title')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Upload Berkas Pengajuan kamar</h3>
  </div>

  <div class="py-4 px-6 bg-white text-base text-abu mt-4 rounded-md flex items-center gap-4">
    <div>
      <i class="bi bi-check-circle-fill text-tahiti"></i>
    </div>
    <div> 
      <h1 class="text-sm"> Pembayaran anda sedang di verifikasi. harap tunggu admin untuk menentukan kamar anda.</h1> 
    </div>
  </div>

  <div class="mt-2 p-4 bg-white w-full h-96 items-center container rounded-md">
    <img class="w-80 my-8 mx-auto" src="https://img.freepik.com/free-vector/flat-youth-day-jumping-people_23-2148576289.jpg?w=996&t=st=1703786826~exp=1703787426~hmac=9c1547964e56557567e25e191856da3685a75eb96833f7a1087c8315454f5d57" alt="">
  </div>




  <script>
    @if(Session::has('berhasil'))
    toastr.success("{{ Session::get('berhasil') }}")
    @endif
  </script>

  @endsection