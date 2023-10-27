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
  <div class="flex-wrap w-auto h-fit object-center px-8 py-8 m-auto bg-white shadow-md rounded-md z-0">
        <h1 class="text-center text-xl font-poppins font-semibold">Sign In</h1>

        <div class="mt-4 font-poppins text-sm">
            <label for="username">NPM</label>
            <input type="text" id="username" class="field"/>
        </div>

        <div class="mt-4 font-poppins text-sm">
            <label for="username">Password</label>
            <input type="password" id="password" class="field"/>
        </div>
        
<!-- Button login -->
       <div class="mt-4">
            <a href="" type="submit" class="button">Login</a>
        </div>

  </div>
</div>
</body>
</html>