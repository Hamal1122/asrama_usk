@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Upload Berkas</h3>
  </div>

  <div class="bg-white px-4 py-4 mt-4 rounded-md">

    <div class="mt-4 font-poppins text-sm w-full lg:w-1/2 text-gray-dark flex-row gap-4">
      <div class="p-4">
        <label for="notelpon"> Kartu keluarga / KK</label>
        <input type="image" src="" alt="" class="field">
        <form action="" method="">
          <button type="submit" class="button  px-4 w-fit ">Upload</button>
        </form>
      </div>

      <div class="p-4">
        <label for="notelpon"> Kartu Tanda Mahasiswa / KTM</label>
        <input type="image" src="" alt="" class="field">
        <form action="" method="">
          <button type="submit" class="button  px-4 w-fit ">Upload</button>
        </form>
      </div>

      <div class="p-4">
        <label for="notelpon"> Kartu Kesehatan <span class="text-abu">(BPJS/ASKES/DLL)</span></label>
        <input type="image" src="" alt="" class="field">
        <form action="" method="">
          <button type="submit" class="button  px-4 w-fit ">Upload</button>
        </form>
      </div>

      <div class="p-4">
        <label for="notelpon"> Surat Domisili <span class="text-abu">( Pindah Sementara Ke Banda Aceh)</span></label>
        <input type="image" src="" alt="" class="field">
        <form action="" method="">
          <button type="submit" class="button  px-4 w-fit ">Upload</button>
        </form>
      </div>

      <div class="p-4">
        <label for="notelpon"> Surat Pernyataan </label>
        <input type="image" src="" alt="" class="field">
        <form action="" method="">
          <button type="submit" class="button  px-4 w-fit ">Upload</button>
        </form>
      </div>

      <div class="p-4">
        <label for="notelpon"> Kartu Tanda Bidikmisi <span class="text-blue">( Opsional )</span></label>
        <input type="image" src="" alt="" class="field">
        <form action="" method="">
          <button type="submit" class="button  px-4 w-fit ">Upload</button>
        </form>
      </div>

    </div>


  </div>
  @endsection