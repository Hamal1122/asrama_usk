@extends('Layout.main')

@section('title')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
  integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
  integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Upload Bukti Pembayaran </h3>
  </div>

  <div class="py-4 px-6 bg-white text-base text-abu mt-4 rounded-md flex items-center gap-4">
    <div>
      <i class="bi bi-wallet-fill"></i>
    </div>
    <div>
      <h1 class="text-sm"> Upload Bukti Pembayaran .</h1>
    </div>
  </div>

<div class="lg:flex gap-4">
  <div class="mt-2 p-4 bg-white w-full lg:w-1/2 rounded-md font-poppins text-gray-dark shadow-md">
    <h1 class="font-semibold text-center">Detail Pengajuan</h1>
    @foreach ($berkas as $data)
    <div class="mt-4 gap-2 text-sm">
      <div>
        <h3>Nama</h3>
        <div class="field text-abu">{{$data->user->name}}</div>
      </div>

      <div class="mt-3">
        <h3>Kategori</h3>
        <div class="field text-abu">{{$data->kategori}}</div>
      </div>

      <div class="mt-3">
        <h3>Kategori Gedung</h3>
        <div class="field text-abu">{{$data->kategorigedung}}</div>
      </div>

      <div class="mt-3">
        <h3>jenis Kamar</h3>
        <div class="field text-abu">{{$data->jeniskamar}}</div>
      </div>

      <div class="mt-3">
        <h3>Durasi</h3>
        <div class="field text-abu">{{$data->durasi}}</div>
      </div>

      <div class="mt-3">
        <h3>Harga</h3>
        <div class="field text-abu">{{$data->formatRupiah('harga') }}</div>
      </div>
        
    </div>
    @endforeach
  </div>




  <div class="mt-2 p-4 bg-white w-full h-fit shadow-md items-center container rounded-md">
    <div>
      <h1 class="mb-4 font-semibold text-gray-dark text-center">Form Pembayaran</h1>
      <div class=" w-full lg:w-1/2 px-4">
        <div class="flex text-center items-center gap-4 font-poppins text-sm text-gray-dark">
          <img class="w-11" src="https://1.bp.blogspot.com/-uBcG0Wx6QVE/YBvz5jBBq9I/AAAAAAAAH4c/w0boQaSfo3IMLc7RBEGIRObQP4eUSKQ_QCLcBGAsYHQ/s1682/logo-bsi.png" alt="">
          <h3>1121078568 a/n Admin</h3>
        </div>

        <div class="mt-4 flex text-center items-center gap-4 font-poppins text-sm text-gray-dark">
          <img class="w-11" src="https://4.bp.blogspot.com/-tceaeWKDv00/UNhHf_6AdZI/AAAAAAAAERE/hR3lYKZxCiQ/s1600/Logo+Bank+BRI.jpg" alt="">
          <h3>1121078568 a/n Admin</h3>
        </div>

        <div class="mt-4 flex text-center items-center gap-4 font-poppins text-sm text-gray-dark">
          <img class="w-11" src="https://1.bp.blogspot.com/-uvochOQIWow/XADqw_y60WI/AAAAAAAABpk/v3qynTi0p5otpIGZN_DOcs0pz5q_K6DmgCLcBGAs/s1600/bank-aceh.jpg" alt="">
          <h3>1121078568 a/n Admin</h3>
        </div>
      </div>

     
     
       <form action="{{ route('upload.bukti_pembayaran') }}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="px-4 mt-8 w-full lg:w-1/2 ">
          <label for="">Upload Bukti Pembayaran <span class="text-xs text-green">( Khusus untuk Kategori KIPK digantikan dengan KARTU TANDA BIDIKMISI )</span></label>
          <input class=" field rounded-md text-blue" type="file" name="bukti_bayar" id="nama_berkas" required>
        </div>
        <div class="mt-2 px-4">
          <p class="text-abu text-xs font-light"> <span class="text-red">*</span>Dimohon untuk mengupload bukti pembayaran dengan jujur dan sesuai dengan ketentuan yang berlaku</p>    
          <p class="text-red text-xs font-light"> <span class="text-red">*</span>Jika Kedapatan Melakukan Kecurangan akan diberikan sanksi yang setimpal !!</p>    
        </div>
        <div class="p-4 mt-12">
          <button type="submit" class="button">Submit</button>
        </div>
       </form>
    </div>
  </div>
</div>



  <script>
    @if (Session:: has('berhasil'))
    toastr.success("{{ Session::get('berhasil') }}")
    @endif
  </script>

  @endsection