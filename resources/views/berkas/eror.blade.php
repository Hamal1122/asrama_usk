@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Berkas</h3>
</div>

<form action="/manage_berkas" method="get">
<div class="mt-4 flex items-center bg-white w-fit px-4 hover:gap-6 transition-all py-2 gap-2 rounded-md">
  <div>
  <i class="bi bi-search"></i>
  </div>
      <input type="search" name="search" id="search" placeholder="Search NIM" class="py-1 px-2 rounded-sm text-xs  ">
</div>
</form>

<div class="py-4 px-6 bg-white text-base text-red mt-4 rounded-md flex items-center gap-4">
    <div>
      <i class="bi bi-emoji-frown"></i>
    </div>
    <div> 
      <h1 class="text-sm">Yahh! Data yang anda cari tidak dapat ditemukan.</h1>
    </div>
  </div>

  <div class="mt-2 p-4 bg-white w-full h-96 items-center container rounded-md">
    <img class="w-80 my-8 mx-auto" src="https://img.freepik.com/free-vector/hand-drawn-no-data-illustration_23-2150696458.jpg?w=740&t=st=1701425293~exp=1701425893~hmac=98678a450f27b090f624c62966760ffdffbf46edf848f8200cca37404f1d0ef9" alt="">
  </div>




@endsection

