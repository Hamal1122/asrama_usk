<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asrama USK</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')

  <style>
    .loading {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        z-index: 9999;
        text-align: center;
        padding-top: 20%;
    }
    .spinner {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3437db;
        width: 80px;
        height: 80px;
        animation: spin 2s linear infinite;
        display: inline-block;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
</head>

<body class="overflow-hidden">
  <div class="flex flex-wrap bg-purple h-screen">

    <!-- login -->
    <form action="{{ route('login') }}" method="POST" class="w-auto h-fit bottom-0 px-4 md:px-8 py-6 m-auto bg-white shadow-lg rounded-3xl z-0 items-center flex flex-wrap gap-10">
      <div class="hidden md:block">
        <img class="w-[350px] h-fit rounded-xl" src="images/login3.svg">
      </div>

      <div class="loading" id="loading">
        <div class="spinner"></div>
        <h1>Tunggu sebentar ya...</h1>
    </div>

      <div class="items-center px-8 gap-20">
        <div class="items-center flex gap-4">
          <img src="http://sipil.usk.ac.id/wp-content/uploads/2018/02/Logo-Unsyiah-Kuning-HD-1012x972-Transparan-1.png" alt="" class="w-10 h-fit">
          <div>
            <h1 class="font-semibold">Asrama USK</h1>
            <h1 class="text-xs font-thin text-gray">Layanan Pengajuan Asrama Untuk Mahasiswa USK</h1>
          </div>
        </div>

        <div class="mt-16">
          <div>
            <h1 class="text-left text-5xl font-poppins font-black">Sign In</h1>
          </div>
          @csrf
          @if (session('error'))
            <div class="mt-4 text-red text-xs">
              {{ session('error') }}
            </div>
          @endif
          <div class="mt-10 font-poppins text-sm">
            <label for="nim">NPM/NIP</label>
            <input type="nim" name="nim" id="nim" class="field" placeholder="NPM" autofocus required value="{{ old('nim') }}" />
          </div>

          <div class="mt-4 font-poppins text-sm">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="field place" placeholder="Password" required />
          </div>

          <!-- Button login -->
        <div class="text-center mt-6">
          <div class="font-poppins">
            <button type="submit" class="bg-purple text-white hover:border px-6 py-2 rounded-md transition-all w-full">Login</button>
          </div>
          <!-- <div class="mt-6 font-poppins">
            <a href="{{ route('landingPage') }}" class="bg-transparent border px-6 text-purple  lg:px-14 py-2 rounded-md hover:bg-purple hover:text-purple transition-all hover:bg-opacity-20 w-full">Kembali Ke landingpage</a>
          </div> -->
        </div>

        </div>
      </div>
    </form>

  </div>
</body>

</html>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      var form = document.querySelector('form');
      if (form) {
          form.addEventListener('submit', function () {
              document.getElementById('loading').style.display = 'block';
          });
      }
  });

  window.addEventListener('load', function () {
      document.getElementById('loading').style.display = 'none';
  });
</script>

