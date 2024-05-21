<!-- Modal -->
<div id="myModalKamar" class="modal" tabindex="-1" aria-hidden='true' style="display : none;">
    <!-- Konten Modal -->
    <div class="modal-content h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-gray-dark bg-opacity-50">
        <div class="bg-white opacity-100 mt-4 rounded-md shadow-lg w-1/3 p-8">
            <form id="modalFormKamar" enctype="multipart/form-data">
                @csrf

                <div class="border-b px-4 py-2 text-base text-gray-dark mb-4">
                    <h3>Tambah Kamar</h3>
                </div>

                <div class="mt-4 font-poppins text-sm text-gray-dark">
                    <label for="text" class="text-gray-dark">Nama Kamar</label>
                    <input type="text" name="nama" id="nama" class="field" placeholder="Nama Kamar" required />
                </div>

                <div class="mt-4 font-poppins text-sm text-gray-dark">
                    <label class="text-gray-dark" for="">Pilih Gedung</label>
                    <select class="field text-gray-dark" id="gedung_id" name="gedung_id" required>
                        <option class="text-abu" value="">Tambahkan Ke Gedung -</option>
                        @foreach ($ged as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }} <span class="text-abu"> - {{ $data->kategori_gedung }}</span></option>
                        @endforeach
                    </select>
                </div>

             <div class="mt-4 font-poppins text-sm text-gray-dark ">
                <label class="text-gray-dark" for="">Kapasitas</label>
                  <select class="field text-gray-dark" id="kapasitas" name="kapasitas" required>
                    <option value="">-- Pilih Kapasitas --</option>
                    <option value="2">2 Orang</option>
                    <option value="4">4 Orang</option>
                  </select>
             </div>

      <div class="mt-4 font-poppins text-sm text-gray-dark ">
        <label for="text" class="text-gray-dark">Harga Kamar</label>
        <input type="number" name="harga" id="harga" class="field" placeholder="Rp." required />
      </div>

                <!-- Bagian lain dari form di sini -->

                <div class="mt-4">
                    <button type="button" class="close button my-2 px-4 w-fit text-clip bg-red hover:bg-red hover:bg-opacity-30 hover:text-red">Cancel</button>
                    <button type="button" id="submitFormKamar" class="button my-2 px-4 w-fit text-clip bg-green hover:bg-green hover:bg-opacity-30 hover:text-green">Tambah</button>
                    <p class="text-xs font-extralight text-blue">*Pastikan semua data sudah benar sebelum menyimpan</p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript untuk Mengatur Modal dan AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Dapatkan modal
    var modal = $("#myModalKamar");

    // Dapatkan tombol yang membuka modal
    var btn = $("#openModalBtnKamar");

    // Dapatkan elemen <span> untuk menutup modal
    var span = $(".close");

    // Saat pengguna mengklik tombol, buka modal 
    btn.click(function() {
      modal.css("display", "block");
    });

    // Saat pengguna mengklik <span> (x) atau di luar modal, tutup modal
    span.click(function() {
      modal.css("display", "none");
    });

    $(window).click(function(event) {
      if (event.target == modal[0]) {
        modal.css("display", "none");
      }
    });

    // Tangani pengiriman formulir menggunakan AJAX
    $("#submitFormKamar").click(function() {
      $.ajax({
        type: "POST",
        url: "/tambah_kamar",
        data: $("#modalFormKamar").serialize(),
        success: function(response) {
          modal.css("display", "none");
          // Tambahkan logika sesuai kebutuhan setelah pengiriman berhasil
          console.log(response); // Contoh: Tampilkan respons dari server di konsol
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText); // Tampilkan pesan kesalahan jika terjadi
        }
      });
    });
  });
</script>