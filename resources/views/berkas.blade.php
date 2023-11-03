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
    </div>
    <i class="bi bi-info-circle-fill order-1 my-auto"></i>
  </div>



  <div class="bg-white px-4 py-4 mt-4 rounded-md">

    <div class="mt-4 font-poppins text-sm w-full lg:w-1/2 text-gray-dark flex-row gap-4">
      <div class="px-4 my-6" id="dropdownButton">
        <!-- dropdown Button -->
        <label for="">Pilih Kategori</label>
        <button onclick="toggle()" class="field text-start text-abu">Kategori Mahasiswa <i class="bi bi-caret-down-fill"></i></button>
        <!-- dropdown menu -->
        <div class="hidden" id="dropdown">
          <form action="/berkas" method="post">
            <div>
              <input type="submit" value="Regular" class="field border-0 rounded-none hover:bg-purple hover:text-white text-start transition-all">
            </div>
            <div>
              <input type="submit" value="International" class="field rounded-none border-0 hover:bg-purple hover:text-white text-start transition-all">
            </div>
            <div>
              <input type="submit" value="KIPK" class="field border-0 rounded-none hover:bg-purple hover:text-white text-start transition-all">
            </div>
        </div>
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
        <label for="notelpon"> Kartu Tanda Bidikmisi <span class="text-blue">( Opsional )</span></label>
        <input type="file" name="bidikmisi" src="" alt="" class="field">
        <button type="submit" class="button my-2 px-4 w-fit ">Upload</button>
      </div>

    </div>


  </div>
  </form>
  @endsection
 
  <!-- script dropdown -->
  <script>
    function toggle(){
      let dropdown = document.querySelector('#dropdownButton #dropdown');
      dropdown.classList.toggle("hidden");
    }
  </script>
