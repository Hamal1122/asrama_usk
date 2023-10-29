<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asrama USK</title>
    <style>
      <link href="/dist/tailwind.css" rel="stylesheet" />
      /* alpinejs */
      

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
       />

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
</style>
@vite('resources/css/app.css')
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"/>
</head>
<body class="  bg-bermuda">

    <nav class=" fixed w-screen py-2 px-4 bg-white" x-data="{navOpen : false}">
        <div class="container mx-auto">
          <div class="flex justify-between items-center">
              <div class="flex flex-row justify-center gap-4 text-base font-poppins">
                <img class="w-10 h-10 "src="http://sipil.usk.ac.id/wp-content/uploads/2018/02/Logo-Unsyiah-Kuning-HD-1012x972-Transparan-1.png" alt="">
                <h3 class="py-2">Asrama USK</h3>
              </div>
              <div class="flex gap-4 ">
              <ion-icon @click="navOpen = ! navOpen" class="text-3xl bg-purple text-white rounded-md order-3 lg:hidden "name="menu-outline"></ion-icon>
              <h2 class="font-Inter text-base hidden sm:block ">hi, Hamal</h2>
              <ion-icon class="text-xl hidden sm:block " name="person"></ion-icon>
            </div>
          </div>
        </div>
    


    <div x-show="navOpen" x-data="{open : false}" class="fixed bottom-0 right-0 left-0 p-4 order-5 bg-white  lg:hidden">

        <ul class="flex justify-between items-center">
            <li>
              <button class="flex flex-col text-gray-dark  opacity-50 justify-center items-center text-base"href="">
              <ion-icon class="text-2xl"name="albums-outline"></ion-icon>
                <span class="font-normal gap-1">Beranda</span>
              </button>
            </li>

            <li>
              <button class="flex flex-col text-gray-dark opacity-50 justify-center items-center text-base"href="">
              <ion-icon class="text-2xl"name="person-outline"></ion-icon>
                <span class="font-normal gap-1">Profil</span>
              </button>
            </li>

            <li>
              <button class="flex flex-col text-purple justify-center items-center text-base"href="">
              <ion-icon class="text-2xl" name="key-outline"></ion-icon>
                <span class="font-bold gap-1">Pilih Kamar</span>
              </button>
            </li>

            <li>
              <button class="flex flex-col text-gray-dark opacity-50 justify-center items-center text-base"href="">
              <ion-icon  class="text-2xl"name="pricetags-outline"></ion-icon>
                <span class="font-normal gap-1">kamar Saya</span>
              </button>
            </li>

            <li>
              <button @click="open = !open" class="flex flex-col text-gray-dark opacity-50 justify-center items-center text-base"href="">
              <ion-icon class="text-2xl" name="ellipsis-horizontal-outline"></ion-icon>
                <span class="font-normal gap-1">More</span>
              </button>
            </li>
          </ul>

          <div x-show="open" class="absolute bottom-[100px] right-4">
              <button class=" bg-red px-8 text-sm py-4 font-bold text-white rounded-full">Logout</button>  
          </div>
        </div>
    </nav>
   
    <section>

      <div class="container mx-auto">
        <div class="grid grid-cols-12">

          <div class="col-span-3 hidden sm:block">
            <nav class="bg-white fixed w-32 h-screen text-center shadow-md px-4 rounded-md ">
              <h2 class="py-4 mt-16 font-poppins font-bold">Menu</h2>
              <ul class="">
                <li class="transition-all my-6 text-left p-4 cursor-pointer rounded-lg text-base font-Inter  text-gray-dark hover:bg-bermuda hover:text-blue"><a href="{{route ('beranda') }}">Beranda</a></li>
                <li class="transition-all my-6 text-left p-4 cursor-pointer rounded-lg text-base font-Inter text-gray-dark hover:bg-bermuda hover:text-blue  "><a href="{{route ('profile') }}">Profil</a></li>
                <li class="transition-all my-6 text-left p-4 cursor-pointer rounded-lg text-base font-Inter bg-blue text-white "><a href="{{route ('kamar') }}">Pilih Kamar</a></li>
                <li class="transition-all my-6 text-left p-4 cursor-pointer rounded-lg text-base font-Inter text-gray-dark hover:bg-bermuda hover:text-blue "><a href="{{route ('kamarsaya') }}">Kamar Saya</a></li>
                <li class="transition-all my-28 text-left p-4 cursor-pointer rounded-lg text-base font-Inter text-red hover:bg-red hover:text-white ">Logout</li>
              </ul>
            </nav>
          </div>

     
          <div class="col-span-12 lg:col-span-9 px-4">
              <div class="bg-white py-2 my-2 mt-16 rounded-md px-4 text-sm font-poppins text-blue">
                <h3>Kamar</h3>
              </div>

              <div class="bg-white text-gray-dark text-sm font-poppins px-4  py-2 rounded-md flex gap-6">
                  <div class="order-2">
                  <h3>Penting :</h3>
                  <p>Khusus mahasiswa Disabilitas diwajibkan untuk memilih kamar berwarna <span class="text-green">Hijau</span></p>
                  <p>Khusus mahasiswa International diwajibkan untuk memilih kamar berwarna <span class="text-yellow">Kuning</span></p>
                  </div>
                  <i class="bi bi-info-circle-fill order-1 my-auto"></i>
              </div>

              <div class="my-2 font-poppins text-sm text-blue px-4">
                <h3>Silahkan memilih kamar</h3>
              </div>

              <div class="bg-white px-6 py-4 mt-2 flex-wrap flex justify-between rounded-md font-poppins text-blue text-sm hover:bg-blue hover:shadow-md hover:text-white transition-all">
                <h4>Gedung Rusunawa B</h4>
                <h4>25 Kamar</h4>
                <i class="bi bi-arrow-right-square-fill"></i>
              </div>  

              </div>
           
          </div>

          </div>
        </div>
      </div>
    </section>




</body>
</html>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>