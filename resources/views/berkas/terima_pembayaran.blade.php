@extends('Layout.admin')

@section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="{{route ('manage_pembayaran') }}" class="bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2"></h3>
  </div>


  <div class="bg-white p-4 mt-4 rounded-md">
    <form action="/accept/{{ $pembayaran->id }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">Nama </label>
        <input type="text" name="nama" id="nama" class="field" placeholder="" value="{{$pembayaran->berkas->user->name}}" required readonly/>
      </div>

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">NIM </label>
        <input type="text" name="nama" id="nama" class="field" placeholder="" value="{{$pembayaran->berkas->user->nim}}" required readonly />
      </div>

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">Jenis Kamar </label>
        <input type="text" name="nama" id="nama" class="field" placeholder="" value="{{$pembayaran->berkas->jeniskamar}}" required readonly />
      </div>

        <div  class="mt-4 font-poppins text-sm text-gray-dark ">
            <label for="tanggal_masuk">Tanggal Masuk:</label>
            <input class="field" type="date" id="tanggal_masuk" name="tanggal_masuk" value="tanggal_masuk">
        </div>

        <div class="mt-4 font-poppins text-sm text-gray-dark ">
            <label for="tanggal_keluar">Tanggal Keluar:</label>
            <input class="field" type="date" id="tgl_keluar" name="tanggal_keluar" readonly value="tanggal_keluar">
        </div>

{{-- dropdown pilih gedung --}}
      <div class="mt-4">
        <label class="text-gray-dark" for="">Pilih Gedung</label>
        <select class="field text-gray-dark" id="gedung" name="gedung" onchange="updateKamarDropdown()">
            <option value="">Pilih Gedung</option>
            @foreach ($gedung as $data)
                <option value="{{$data->id}}">{{$data->nama}}</option>
            @endforeach
        </select>
    </div>

{{-- dropdown pilih kamar --}}
    <div class="mt-4">
        <label class="text-gray-dark" for="">Pilih Kamar</label>
        <select class="field text-gray-dark" id="kamar_id" name="kamar_id">
            <option value="">Pilih Kamar</option>
            <!-- Opsi Kamar akan diisi secara dinamis menggunakan JavaScript -->
        </select>
    </div>

    {{-- Button submit --}}
    <form action="{{route('confirm.data', $pembayaran->id)}}" method="POST" enctype="multipart/form-data">
       @csrf
       @method('POST')
      <button type="submit" class="button my-2 px-4 w-fit text-clip">Konfirmasi</button>
    </form>
      <p class="text-xs font-extralight text-blue">*pastikan semua data sudah benar sebelum menyimpan</p>
  </div>


  </form>
</div>



<script>
    function updateKamarDropdown() {
        // Dapatkan nilai yang dipilih dari dropdown Gedung
        var selectedGedung = document.getElementById("gedung").value;

        // Dapatkan dropdown Kamar
        var kamarDropdown = document.getElementById("kamar_id");

        // Hapus opsi yang sudah ada
        kamarDropdown.innerHTML = '<option value="">Pilih Kamar</option>';

        // Isi dropdown Kamar berdasarkan Gedung yang dipilih
        if (selectedGedung !== '') {
            // Gunakan Ajax atau metode lain untuk mengambil opsi Kamar berdasarkan Gedung yang dipilih
            @foreach ($kamar as $kamarData)
                if ("{{$kamarData->gedung_id}}" === selectedGedung) {
                    var option = document.createElement("option");
                    option.value = "{{$kamarData->id}}";
                    option.text = "{{$kamarData->nama}}- Kapasitas {{$kamarData->jumlahpenghuni}} / {{$kamarData->kapasitas}} orang";
                    kamarDropdown.add(option);
                    kamarDropdown.value = "{{$kamarData->kamar_id}}";
                }
            @endforeach
        }
    }
</script>

<script>
    $(document).ready(function() {
      $('#tanggal_masuk').change(function() {
        var tanggalMulai = $(this).val();
        var tanggalBerakhir = calculateEndDateOneYear(tanggalMulai);
        $('#tgl_keluar').val(tanggalBerakhir);
      });

      function calculateEndDateOneYear(startDate) {
        var date = new Date(startDate);
        date.setFullYear(date.getFullYear() + 1);
        var formattedDate = date.toISOString().split('T')[0];
        return formattedDate;
      }
    });
  </script>
@endsection


