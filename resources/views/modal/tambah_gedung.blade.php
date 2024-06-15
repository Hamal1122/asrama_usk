<!-- Modal -->
  <div id="myModal" class="modal" tabindex="-1" aria-hidden='true' style="display : none;">
    <!-- Konten Modal -->
    <div class="modal-content h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-gray-dark bg-opacity-50" >
      <!-- <span class="close">&times;</span> -->
      <div class="bg-white opacity-100 mt-4 rounded-md  shadow-lg w-1/3 p-8">
        <form id="modalForm" enctype="multipart/form-data">
          @csrf

          <div class="border-b px-4 py-2 text-base text-gray-dark mb-4">
            <h3>
              Tambah Gedung
            </h3>
          </div>

          <div class="mt-4 font-poppins text-sm text-gray-dark w-1/2 ">
            <label for="text" class="text-gray-dark">Nama Gedung</label>
            <input type="text" name="nama" id="nama" class="field" placeholder="Gedung" required />
          </div>

          <div class="mt-4 w-1/2">
            <label class="text-gray-dark" for="">Pilih Kategori</label>
            <select class="field text-gray-dark" id="kategori" name="kategori_gedung" required>
              <option value="">Pilih Kategori</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
        <div class="mt-4">
          <button type="button" class="close button my-2 px-4 w-fit text-clip bg-red hover:bg-red hover:bg-opacity-30 hover:text-red">Cancel</button>
          <button type="button" id="submitForm" class="button my-2 px-4 w-fit text-clip bg-green hover:bg-green hover:bg-opacity-30 hover:text-green ">Tambah</button>
          <p class="text-xs font-light text-blue">*Pastikan semua data sudah benar sebelum menyimpan</p>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript untuk Mengatur Modal dan AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Dapatkan modal
    var modal = $("#myModal");

    // Dapatkan tombol yang membuka modal
    var btn = $("#openModalBtn");

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
    $("#submitForm").click(function() {
      $.ajax({
        type: "POST",
        url: "/tambah_gedung",
        data: $("#modalForm").serialize(),
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