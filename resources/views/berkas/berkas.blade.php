@extends('Layout.main')

@section('title')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Upload Berkas Pengajuan Kamar</h3>
  </div>

  <div class="bg-white text-abu text-xs font-poppins px-4  py-2 rounded-md flex gap-6 mt-4">
    <div class="px-4 py-2">
      <h3 class="text-blue py-2">Template Surat:</h3>
      <p class="mt-2">- Surat Pernyataan Masuk Asrama <span class="px-4 text-green"><a href="\template\pernyataan.pdf">  Download</a></span> </p> 
    </div>
  </div>

  <form action="{{ route('berkas.upload') }}" method="POST" enctype="multipart/form-data">
    <section>
      <!-- form upload berkas -->

      <div class="container mx-auto py-4 shadow-md bg-white mt-4 rounded-md">
        <div class="grid grid-cols-12">
          <div class="col-span-12 lg:col-span-6 px-6 gap-6 flex-col flex text-gray-dark lg:w-2/3">
            <h1 class="font-Inter text-blue text-base">Berkas Pengajuan Kamar</h1>
            @csrf

            <div>
              <label for="">Pilih Kategori</label>
              <select class="field text-gray-dark" id="kategori" name="kategori" required>
                <option class="text-abu" value="">Plih Kategori Pengguna</option>
                @if (!$hasKIPK)
                    <option value="KIP">Mahasiswa KIPK</option>
                @endif
                <option value="reguler">Mahasiswa Reguler</option>
                <option value="internasional">Mahasiswa Internasonal</option>
              </select>
            </div>
            <div>
              <label for="">Upload Berkas Anda <span class="text-xs text-green">( Pastikan data yang mau diupload sudah lengkap)</span></label>
              <input class=" field rounded-md text-blue" type="file" name="nama_berkas" id="nama_berkas" accept=".pdf" required>
            </div>

            <div class="">
              <p class="text-abu text-xs font-semibold">*Berkas yang Diperlukan <span class="text-green text-xs">(digabung dalam satu file .pdf)</span></p>
              <p class="text-abu mt-2 text-xs"><span class="text-red">*</span>Foto KTP</p>
              <p class="text-abu mt-2 text-xs"><span class="text-red">*</span>Kartu Tanda Mahasiswa (KTM)</p>
              <p class="text-abu mt-2 text-xs"><span class="text-red">*</span>Kartu Kesehatan (BPJS/ASKES/DLL)</p>
              <p class="text-abu mt-2 text-xs"><span class="text-red">*</span>Surat Domisili (Surat Pindah Sementara Ke Banda Aceh)</p>
              <p class="text-abu mt-2 text-xs"><span class="text-red">*</span>Surat Peryataan</p>
            </div>

          </div>


          <!-- Form Pengajuan Kamar -->
          <div class="col-span-12 lg:col-span-6 ">
            <div class="col-span-12 lg:col-span-6 px-6 gap-6 flex-col flex lg:w-2/3 mt-8 lg:mt-0">
              <h1 class="font-Inter text-blue text-base">Form Pengajuan Kamar</h1>

              <div>
                <label class="text-gray-dark" for="">Kategori Gedung</label>
                <input class="field text-gray-dark" type="text" name="kategorigedung" id="kategorigedung" value="{{ Auth::user()->jenis_kelamin }}" readonly>
              </div>

              <div>
                <label class="text-gray-dark" for="">Masa Sewa</label>
                <select class="field text-gray-dark" id="durasi" name="durasi">
                  <option value="1 tahun">1 Tahun</option>
                </select>
              </div>

              <div>
                <label class="text-gray-dark" for="jenisKamar">Pilih Jenis Kamar (Kapasitas)</label>
                <select class="field text-gray-dark" id="jenisKamar" name="jenisKamar" onchange="updateHarga()" required>
                  <option value="">Masukkan Pilihan</option>
                  <option value="2orang">Kapasitas 2 Orang</option>
                  <option value="4orang">Kapasitas 4 Orang</option>
                </select>
              </div>
              <div>
                <label class="text-gray-dark" for="harga">Total Harga</label>
                <input class="field text-abu" type="number" name="harga" id="harga" readonly>
              </div>

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
        harga = 2400000;
      } else if (jenisKamar === "4orang") {
        harga = 1200000;
      } else {
        harga = 0;
      }

      // Menyimpan harga pada input dengan id "harga"
      document.getElementById("harga").value = harga;
    }

    // Panggil fungsi updateHarga saat halaman dimuat
    updateHarga();
  </script>

<!-- toastr -->
<script>
  @if(Session::has('berhasil'))
  toastr.success("{{ Session::get('berhasil') }}")
  @endif
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




  @endsection