@extends('Layout.main')

@section('title')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Upload Berkas</h3>
  </div>

  <div class="bg-white text-abu text-sm font-poppins px-4  py-2 rounded-md flex gap-6 mt-4">
    <div class="px-4 py-2">
      <h3 class="text-blue">Informasi:</h3>
      <p class="mt-2">- Lengkapi data kamu sesuai dengan ketentuan yang berlaku </p>
      <p class="mt-2">- Dimohon Untuk mengupload dengan teliti</p>
    </div>
  </div>

  <h1>Anda Sudah Mengupload berkas</h1>
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
        harga = "Rp. 2.400.000";
      } else if (jenisKamar === "4orang") {
        harga = "Rp. 1.200.000";
      } else {
        harga = "Rp. 0";
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

  @endsection