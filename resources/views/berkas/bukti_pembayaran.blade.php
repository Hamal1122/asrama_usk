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

  <div>
    <h1></h1>
  </div>

  <div class="mt-2 p-4 bg-white w-full h-fit items-center container rounded-md">
    <div>
      <div class="w-1/2 px-4">
        <label for="">Pilih Bank</label>
        <select class="field text-gray-dark" id="kategori" name="kategori" required>
          <option class="text-abu" value="">Pilih</option>
          <option value="">BSI SYARIAH - 12345677 a/n Admin</option>
          <option value="">BPD ACEH - 12345677 a/n Admin </option>
          <option value="">MANDIRI - 12345677 a/n Admin</option>
          <option value="">BRI - 12345677 a/n Admin</option>
          <option value="">BNI- 12345677 a/n Admin</option>
          <option value="">KIPK</option>
        </select>
      </div>

      <form action="{{ route('upload.bukti_pembayaran') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="bukti_bayar">
        <button type="submit">Unggah Bukti Pembayaran</button>
      </form>
      <!-- <div class="px-4 mt-8 w-1/2">
        <label for="">Upload Bukti Pembayaran <span class="text-xs text-green">( Khusus untuk Mahasiswa KIPK digantikan dengan KARTU TANDA BIDIKMISI )</span></label>
        <input class=" field rounded-md text-blue" type="file" name="nama_berkas" id="nama_berkas" required>
      </div>
      <div class="mt-2 px-4">
        <p class="text-abu text-xs font-light"> <span class="text-red">*</span>KARTU TANDA BIDIKMISI hanya bisa digunakan di tahun pertama atau masa wajib asrama</p>    
        <p class="text-red text-xs font-light"> <span class="text-red">*</span>Jika Kedapatan Melakukan Kecurangan akan diberikan sanksi yang setimpal !!</p>    
      </div>
      <div class="p-4 mt-12">
        <button type="submit" class="button">Submit</button>
      </div> -->
    </div>
  </div>




  <script>
    @if (Session:: has('berhasil'))
    toastr.success("{{ Session::get('berhasil') }}")
    @endif
  </script>

  @endsection