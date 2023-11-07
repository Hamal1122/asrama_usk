@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Upload Berkas</h3>
  </div>

  <div class="bg-blue text-white text-sm font-poppins px-4  py-2 rounded-md flex gap-6 mt-4">
    <div class="order-2">
      <h3>Informasi:</h3>
      <p> Lengkapi data kamu sesuai dengan ketentuan yang berlaku </p>
      <p>Untuk Kartu Tanda BIDIKMISI hanya diisi oleh mahasiswa BIDIKMISI</p>
      <p>Dimohon Untuk mengupload dengan teliti</p>
    </div>
    <i class="bi bi-info-circle-fill order-1 my-auto"></i>
  </div>


  <form action="">
    <div class="bg-white px-4 py-4 mt-4 rounded-md">
      <div class="mt-4 font-poppins text-sm w-full lg:w-1/2 text-gray-dark flex-row gap-4">
        <div class="px-4 my-6">
          <label class="px-4" for="">Pilih Kategori</label>
          <div class="my-4 px-4">
            <select class="field px-4" name="" id="">
              <option selected class="field  text-abu">Kategori Mahasiswa</option>
              <option class="field  " value="">Reguler</option>
              <option class="field " value="">KIPK</option>
              <option class="field " value="">International</option>
            </select>
          </div>

          <div class="p-4">
            <label for="notelpon"> Kartu keluarga / KK</label>
            <input type="file" name="kk" alt="" class="field">
            <button type="submit" class="button my-2 px-4 w-fit ">Upload</button>
          </div>

          <div class="p-4">
            <label for="notelpon"> Kartu Tanda Mahasiswa / KTM</label>
            <input type="file" name="ktm" src="" alt="" class="field">
            <button type="submit" class="button my-2 px-4 w-fit ">Upload</button>
          </div>

          <div class="p-4">
            <label for="notelpon"> Kartu Kesehatan <span class="text-abu">(BPJS/ASKES/DLL)</span></label>
            <input type="file" name="kartu kesehatan" src="" alt="" class="field">
            <button type="submit" class="button my-2 px-4 w-fit ">Upload</button>
          </div>

          <div class="p-4">
            <label for="notelpon"> Surat Domisili <span class="text-abu">( Pindah Sementara Ke Banda Aceh)</span></label>
            <input type="file" name="surat domisili" src="" alt="" class="field">
            <button type="submit" class="button my-2 px-4 w-fit ">Upload</button>
          </div>

          <div class="p-4">
            <label for="notelpon"> Surat Pernyataan </label>
            <input type="file" name="surat pernyataan" src="" alt="" class="field">
            <button type="submit" class="button my-2 px-4 w-fit ">Upload</button>
          </div>

          <div class="p-6">
            <label for="notelpon"> Kartu Tanda Bidikmisi <span class="text-blue">( Khusus Mahasiswa BIDIKMISI )</span></label>
            <input type="file" name="bidikmisi" src="" alt="" class="field">
            <button type="submit" class="button my-2 px-4 w-fit ">Upload</button>
          </div>

        </div>


      </div>
  </form>
  @endsection