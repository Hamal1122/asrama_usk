<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asrama USK</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
  </style>
  @vite('resources/css/app.css')
</head>

<body class="overflow-hidden ">
  <div class="flex flex-wrap bg-white h-screen">

    <!-- information login page -->
    <div class="bg-purple w-[600px] h-auto flex-wrap">
      <h1 class="text-center pt-28 font-poppins text-white font-bold pointer-events-none">Selamat datang di Asrama USK</h1>
      <h2 class="text-center  font-poppins  font-light text-xs  text-yellow pointer-events-none"> ( Layanan pemesanan kamar Asrama untuk mahasiswa USK ) </h2>
      <div class="text-center font-poppins text-blue bg-white text-xs mx-14 w-fit px-4 py-2 mt-10 rounded-md pointer-events-none ">Mahasiswa dapat menggunakan Akun KRS atau Simpeg untuk Masuk</div>

    </div>

    <!-- login -->
    <form action="{{ route('login') }}" method="POST" class="flex-wrap w-auto h-fit mx-auto bottom-0 px-8 py-8 m-auto bg-white shadow-md rounded-md z-0">
      <div class="">
        <h1 class="text-center text-xl font-poppins font-semibold">Sign In</h1>

        @csrf
        <div class="mt-4 font-poppins text-sm">
          <label for="nim">NPM</label>
          <input type="nim" name="nim" id="nim" class="field" placeholder="nim" autofocus required/>
        </div>

        <div class="mt-4 font-poppins text-sm">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="field place" placeholder="Password" required />
        </div>

        <!-- Button login -->
        <div class="mt-4">
          <button type="submit" class="button">Login</button>
        </div>
    </form>
    <div class="card-body">
                   
  </div>
  </div>
</body>

</html>