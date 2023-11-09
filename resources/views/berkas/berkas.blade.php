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

  <form action="/upload_berkas" method="post">
  <section>
    <!-- form upload berkas -->
    
      <div class="container mx-auto py-4 bg-white mt-4 rounded-md">
        <div class="grid grid-cols-12">
          <div class="col-span-12 lg:col-span-6 px-6 gap-6 flex-col flex text-gray-dark lg:w-2/3">
            <h1 class="font-Inter text-blue text-lg">Berkas Pengajuan Kamar</h1>
            @csrf
            
            <div>
              <label for="">Pilih Kategori</label>
              <select class="field text-gray-dark" id="kategori"  name="kategori">
                <option class="text-abu" value="">Plih Kategori</option>
                <option value="KIP">KIPK</option>
                <option value="reguler">Reguler</option>
                <option value="internasional">Internasonal</option>
              </select>
            </div>
            <div>
              <label for="">Kartu Keluarga</label>
              <input class=" field   rounded-md text-blue" type="file" name="kk" id="kk">
            </div>

            <div>
              <label for="">Kartu Tanda Mahasiswa / KTM</label>
              <input class=" field   rounded-md text-blue" type="file" name="ktm" id="ktm">
            </div>

            <div>
              <label for="">Kartu Kesehatan (BPJS/ASKES/DLL)</label>
              <input class=" field   rounded-md text-blue" type="file" name="kartu_kesehatan" id="kartu_kesehatan">
            </div>

            <div>
              <label for="">Surat Domisili (Pindah Sementara Ke Banda Aceh)</label>
              <input class=" field   rounded-md text-blue" type="file" name="surat_domisili" id="surat_domisili">
            </div>

            <div>
              <label for="">Surat Pernyataan</label>
              <input class=" field   rounded-md text-blue" type="file" name="surat_pernyataan" id="surat_pernyataan">
            </div>

            <div>
              <label for="">Kartu Tanda BIDIKMISI (Khusu Mahasiswa BIDIKMISI)</label>
              <input class=" field   rounded-md text-blue" type="file" name="kartu_bidikmisi" id="kartu_bidikmisi">
            </div>

          </div>


          <!-- Form Pengajuan Kamar -->
          <div class="col-span-12 lg:col-span-6 ">
            <div class="col-span-12 lg:col-span-6 px-6 gap-6 flex-col flex lg:w-2/3">
              <h1 class="font-Inter text-blue text-lg">Form Pengajuan Kamar</h1>

              <div>
                <label class="text-gray-dark" for="">Pilih Kategori</label>
                <select class="field text-gray-dark" id="kategorigedung" name="kategorigedung">
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>

              <div>
                <label class="text-gray-dark" for="">Masa Sewa</label>
                <select class="field text-gray-dark" id="durasi" name="durasi">
                  <option value="1tahun">1 Tahun</option>
                </select>
              </div>

              <div>
                <label class="text-gray-dark" for="">Tanggal Masuk</label>
                <input class="field text-gray-dark" type="date" name="tanggal_masuk" id="tanggal_masuk">
              </div>

              <div>
                <label class="text-gray-dark" for="">Tanggal Keluar</label>
                <input class="field text-gray-dark" type="date" name="tanggal_keluar" id="tanggal_keluar">
              </div>

              <div>
                <label class="text-gray-dark" for="">Harga Perindividu</label>
                <div class="field">Rp. 1.200.000</div>
              </div>

              <div>
                <label class="text-gray-dark" for="">Bukti Pembayaran <span class="text-green">(Bisa dengan Kartu Tanda KIPK untuk mahasiswa KIPK)</span></label>
                <input class=" field   rounded-md text-blue" type="file" name="bukti_pembayaran" id="bukti_pembayaran">
              </div>


            </div>
          </div>
        </div>
        <div class="p-4 mt-4">
          <button type="submit" class="button">Submit</button>
        </div>
      </div>
  </section>
  </form>

  @endsection