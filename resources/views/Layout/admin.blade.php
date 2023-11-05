<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | {{ $title }}</title>
  <style>
    <link href="/dist/tailwind.css" rel="stylesheet" /><link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
  </style>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
</head>

<body class=" bg-bermuda ">

  <nav class=" fixed w-screen py-2 px-8 bg-white" x-data="{navOpen : false}">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div>
          <h1>AsramaKita</h1>
        </div>

        <div class="flex gap-4 p-2  ">
          <ion-icon @click="navOpen = ! navOpen" class="text-3xl bg-purple text-white rounded-md order-3 lg:hidden " name="menu-outline"></ion-icon>
          <h2 class="font-Inter text-sm hidden sm:block ">hi, Admin</h2>
          <ion-icon class=" hidden sm:block " name="person"></ion-icon>
        </div>
      </div>
    </div>



    <div x-show="navOpen" x-transition x-data="{open : false}" class="fixed h-screen left-0  order-5 bg-white  lg:hidden">
      <h2 class="py-4 mt-4 font-Inter font-bold text-center mb-4">Menu</h2>
      <ul class="">
        <li class="menuhover"><a href="{{route ('beranda_admin') }}"><i class="bi bi-grid-1x2-fill  mx-4"></i>Dashboard</a></li>
        <li class="menuhover"><a href="{{route ('manage_kamar') }}"><i class="bi bi-sliders mx-4"></i>Manage Kamar</a></li>
        <li class="menuhover"><a href=""><i class="bi bi-wallet-fill mx-4"></i></i>Manage Pembayaran</a></li>
        <li class="menuhover"><a href=""><i class="bi bi-person-fill mx-4"></i></i>Manage User</a></li>
        <li class="menuhover "><a href="{{route ('manage_informasi') }}"><i class="bi bi-info-square-fill mx-4"></i>Manage Informasi</a></li>
        <li class="menuhover "><a href="{{route ('manage_berkas') }}"><i class="bi bi-file-earmark-check-fill mx-4"></i>Manage Berkas</a></li>
        <li class="logout "><a href="{{ route('logout') }}" onclick=event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left mx-4"></i>Logout</a></li>
        
      </ul>
    </div>
  </nav>

  <section>

    <div class="container mx-auto ">
      <div class="grid grid-cols-12">

        <div class="col-span-2 hidden sm:block">
          <nav class="bg-white h-screen text-center shadow-md px-4 rounded-md fixed w-fit">
            <div class="flex flex-row justify-center gap-4 font-Inter p-4 mx-auto px-12">
              <img class="w-8 h-8 " src="http://sipil.usk.ac.id/wp-content/uploads/2018/02/Logo-Unsyiah-Kuning-HD-1012x972-Transparan-1.png" alt="">
              <h3 class=" py-2 font-Inter text-sm">AsramaKita</h3>
            </div>
            <h2 class="py-4 mt-4 font-Inter font-bold">Menu</h2>
            <ul class="">
              <li class="menuhover"><a href="{{route ('beranda_admin') }}"><i class="bi bi-grid-1x2-fill  mx-4"></i>Dashboard</a></li>
              <li class="menuhover"><a href="{{route ('manage_kamar') }}"><i class="bi bi-sliders mx-4"></i>Manage Kamar</a></li>
              <li class="menuhover"><a href=""><i class="bi bi-wallet-fill mx-4"></i></i>Manage Pembayaran</a></li>
              <li class="menuhover"><a href=""><i class="bi bi-person-fill mx-4"></i></i>Manage User</a></li>
              <li class="menuhover "><a href="{{route ('manage_informasi') }}"><i class="bi bi-info-square-fill mx-4"></i>Manage Informasi</a></li>
              <li class="menuhover "><a href="{{route ('manage_berkas') }}"><i class="bi bi-file-earmark-check-fill mx-4"></i>Manage Berkas</a></li>
              <li class="logout "><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left mx-4"></i>Logout</a></li>
            </ul>
          </nav>
        </div>


        <div class="col-span-12 lg:col-span-10 w-full px-4">
          <div class=" py-1 mt-16 rounded-md px-4 text-sm font-poppins text-blue ">
            <h3>@yield('layout')</h3>
          </div>


        </div>
      </div>
    </div>
  </section>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
        </form>


</body>

</html>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>