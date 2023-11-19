@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class=" bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Upload Berkas</h3>
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
              <select class="field text-gray-dark" id="kategori" name="kategori" required>
                <option class="text-abu" value="">Plih Kategori</option>
                <option value="KIP">KIPK</option>
                <option value="reguler">Reguler</option>
                <option value="internasional">Internasonal</option>
              </select>
            </div>
            <div>
              <label for="">Kartu Keluarga</label>
              <input class=" field   rounded-md text-blue" type="file" name="kk" id="kk" required>
            </div>

            <div>
              <label for="">Kartu Tanda Mahasiswa / KTM</label>
              <input class=" field   rounded-md text-blue" type="file" name="ktm" id="ktm" required>
            </div>

            <div>
              <label for="">Kartu Kesehatan (BPJS/ASKES/DLL)</label>
              <input class=" field   rounded-md text-blue" type="file" name="kartu_kesehatan" id="kartu_kesehatan" required>
            </div>

            <div>
              <label for="">Surat Domisili (Pindah Sementara Ke Banda Aceh)</label>
              <input class=" field   rounded-md text-blue" type="file" name="surat_domisili" id="surat_domisili" required>
            </div>

            <div>
              <label for="">Surat Pernyataan</label>
              <input class=" field   rounded-md text-blue" type="file" name="surat_pernyataan" id="surat_pernyataan" required>
            </div>

            <!-- <div>
              <label for="">Kartu Tanda BIDIKMISI (Khusu Mahasiswa BIDIKMISI)</label>
              <input class=" field   rounded-md text-blue" type="file" name="kartu_bidikmisi" id="kartu_bidikmisi">
            </div> -->

          </div>


          <!-- Form Pengajuan Kamar -->
          <div class="col-span-12 lg:col-span-6 ">
            <div class="col-span-12 lg:col-span-6 px-6 gap-6 flex-col flex lg:w-2/3 mt-8 lg:mt-0">
              <h1 class="font-Inter text-blue text-lg">Form Pengajuan Kamar</h1>

              <div>
                <label class="text-gray-dark" for="">Pilih Kategori</label>
                <select class="field text-gray-dark" id="kategorigedung" name="kategorigedung">
                  <option value="">Masukkan Pilihan</option>
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
                <input class="field text-gray-dark" type="date" name="tanggal_masuk" id="tanggal_masuk" requ>
              </div>

              <div>
                <label class="text-gray-dark" for="">Tanggal Keluar</label>
                <input class="field text-abu" type="date" name="tanggal_keluar" id="tanggal_keluar" readonly>
              </div>

              <div>
                <label class="text-gray-dark" for="jenisKamar">Pilih Jenis Kamar (Kapasitas)</label>
                <select class="field text-gray-dark" id="jenisKamar" name="jenisKamar" onchange="updateHarga()" required>
                  <option value="">Masukkan Pilihan</option>
                  <option value="2orang">2 Orang</option>
                  <option value="4orang">4 Orang</option>
                </select>
              </div>

              <div>
                <label class="text-gray-dark" for="harga">Total Harga</label>
                <input class="field text-abu" type="text" name="harga" id="harga" readonly>
              </div>

              <!-- <div>
                <label class="text-gray-dark" for="">Bukti Pembayaran <span class="text-green">(Bisa dengan Kartu Tanda KIPK untuk mahasiswa KIPK)</span></label>
                <input class=" field   rounded-md text-blue" type="file" name="bukti_pembayaran" id="bukti_pembayaran">
              </div> -->


            </div>
          </div>
        </div>
        <div class="p-4 mt-8">
          <button type="submit" class="button">Submit</button>
        </div>
      </div>
    </section>
  </form>


  <!-- Autofill Tanggal berakhir -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tanggal_masuk').change(function() {
        var tanggalMulai = $(this).val();
        var tanggalBerakhir = calculateEndDateOneYear(tanggalMulai);
        $('#tanggal_keluar').val(tanggalBerakhir);
      });

      function calculateEndDateOneYear(startDate) {
        var date = new Date(startDate);
        date.setFullYear(date.getFullYear() + 1);
        var formattedDate = date.toISOString().split('T')[0];
        return formattedDate;
      }
    });
  </script>


  <!-- Autofill Harga Berdasarkan Jenis Kamar(kapasitas) -->
  <script>
    function updateHarga() {
      var jenisKamar = document.getElementById("jenisKamar").value;
      var harga;

      // Logika penentuan harga berdasarkan jenis kamar
      if (jenisKamar === "2orang") {
        harga = "Rp. 1.200.000";
      } else if (jenisKamar === "4orang") {
        harga = "Rp. 2.400.000";
      } else {
        harga = "Rp. 0";
      }

      // Menyimpan harga pada input dengan id "harga"
      document.getElementById("harga").value = harga;
    }

    // Panggil fungsi updateHarga saat halaman dimuat
    updateHarga();
  </script>

  @endsection