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
  <div class="flex flex-wrap bg-purple h-screen">

    <!-- information login page -->
    <!-- <div class="bg-purple w-[600px] h-auto flex-wrap">
      <h1 class="text-center pt-28 font-poppins text-white font-bold pointer-events-none">Selamat datang di Asrama USK</h1>
      <h2 class="text-center  font-poppins  font-light text-xs  text-yellow pointer-events-none"> ( Layanan Pengajuan Asrama Untuk Mahasiswa USK ) </h2>
      <div class="text-center font-poppins text-blue bg-white text-xs mx-14 w-fit px-4 py-2 mt-10 rounded-md pointer-events-none ">Mahasiswa dapat menggunakan Akun KRS atau Simpeg untuk Masuk</div>

    </div> -->

    <!-- login -->
    <form action="{{ route('login') }}" method="POST" class="w-auto h-fit bottom-0 px-4 md:px-8  py-6 m-auto bg-white shadow-md rounded-lg z-0 items-center flex flex-wrap gap-4">
      <div class="hidden md:block">
        <img class="w-fit h-[500px] rounded-lg" src="https://img.freepik.com/free-vector/neighbours-windows-illustration_1284-65010.jpg?w=740&t=st=1700107573~exp=1700108173~hmac=7d2f56ef41ed4b3bd36d6f8194217870145068251f4881c595cd781e3bd9cdcc" alt="">
      </div>

      <div class="items-center px-8 ">
        <div class="items-center flex gap-4">
          <img src="http://sipil.usk.ac.id/wp-content/uploads/2018/02/Logo-Unsyiah-Kuning-HD-1012x972-Transparan-1.png" alt="" class="w-10 h-fit">
          <div>
            <h1 class="font-semibold">Asrama USK</h1>
            <h1 class="text-xs font-thin text-gray">Layanan Pengajuan Asrama Untuk Mahasiswa USK</h1>
          </div>
        </div>

        <div>
          <h1 class="text-center text-xl font-poppins font-semibold mt-8">Sign In</h1>
        </div>
        @csrf
        <div class="mt-4 font-poppins text-sm">
          <label for="nim">NPM</label>
          <input type="nim" name="nim" id="nim" class="field" placeholder="NPM" autofocus required />
        </div>

        <div class="mt-4 font-poppins text-sm">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="field place" placeholder="Password" required />
        </div>

        <!-- Button login -->
        <div class="mt-4">
          <button type="submit" class="button">Login</button>
        </div>

      </div>
    </form>
  </div>
</body>

</html>