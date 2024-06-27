<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin | AsramaUSK</title>
   <style>
    <link href="/dist/tailwind.css" rel="stylesheet" /><link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
  </style>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script src="echarts.js"></script>
</head>

</head>

<body class=" bg-abubg max-h-max ">

  <nav class=" fixed w-screen py-2 px-8 bg-white" x-data="{navOpen : false}">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div>
          <h1>AsramaUSK</h1>
        </div>

        <div class="flex gap-2 p-2  ">
          <ion-icon @click="navOpen = ! navOpen" class="text-3xl bg-purple text-white shadow-sm rounded-md order-3 lg:hidden " name="menu-outline"></ion-icon>
          <div class="items-center hover:bg-abu hover:bg-opacity-5 p-2 rounded-md">
            <h2 class="font-Inter text-sm hidden sm:block ">{{ Auth::user()->name }} </h2>
          </div>
          <div class="bg-blue bg-opacity-20 px-2 py-2 rounded-md hidden sm:block  ">
            <ion-icon class=" hidden sm:block text-blue " name="person"></ion-icon>
          </div>
        </div>
      </div>
    </div>



    <div x-show="navOpen" x-transition x-data="{open : false}" class="fixed h-screen left-0  order-5 bg-white  lg:hidden">
      <h2 class="py-4 mt-4 font-Inter font-bold text-center mb-4">Menu</h2>
      <ul class="">
        <li class="menuhover"><a class=" @if(Request::is('beranda_admin')) menuaktif @endif" href="{{route ('beranda_admin') }}"><i class="bi bi-grid-1x2-fill  mx-4"></i>Dashboard</a></li>
        <li class="menuhover"><a class=" @if(Request::is('manage_kamar')) menuaktif @endif"  href="{{route ('manage_kamar') }}"><i class="bi bi-sliders mx-4"></i>Manage Kamar</a></li>
        <li class="menuhover"><a href=""><i class="bi bi-person-fill mx-4"></i></i>Manage User</a></li>
        <li class="menuhover "><a href="{{route ('manage_informasi') }}"><i class="bi bi-info-square-fill mx-4"></i>Manage Postingan</a></li>
        <li class="menuhover "><a href="{{route ('manage_berkas') }}"><i class="bi bi-file-earmark-check-fill mx-4"></i>Manage Berkas</a></li>
        <li class="logout "><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form2').submit();"><i class="bi bi-box-arrow-left mx-4"></i>Logout</a></li>

      </ul>
    </div>
  </nav>

  <section>

    <div class="container mx-auto ">
      <div class="grid grid-cols-12">

        <div class="col-span-2 hidden lg:block">
          <nav class="bg-white h-screen text-center px-4 fixed w-fit">
            <div class="flex flex-row justify-center gap-4 font-Inter p-4 mx-auto px-12">
              <img class="w-8 h-8 " src="http://sipil.usk.ac.id/wp-content/uploads/2018/02/Logo-Unsyiah-Kuning-HD-1012x972-Transparan-1.png" alt="">
              <h3 class=" py-2 font-poppins text-sm">Asrama USK</h3>
            </div>
            <h2 class="py-4  font-poppins font-bold">Menu</h2>
            <ul class="">
              <li class="menuhover"><a class=" @if(Request::is('beranda_admin')) menuaktif @endif" href="{{route ('beranda_admin') }}"><i class="bi bi-grid-1x2-fill  mx-4"></i>Beranda</a></li>
              <li class="menuhover"><a class=" @if(Request::is('manage_berkas')) menuaktif @endif" href="{{route ('manage_berkas') }}"><i class="bi bi-archive-fill  mx-4"></i>Manage Berkas</a></li>
              <li class="menuhover"><a class=" @if(Request::is('manage_pembayaran')) menuaktif @endif" href="{{route ('manage_pembayaran') }}"><i class="bi bi-calendar3-event-fill mx-4"></i>Manage Pembayaran</a></li>
              <li class="menuhover"><a class=" @if(Request::is('manage_kamar')) menuaktif @endif" href="{{route ('manage_kamar') }}"><i class="bi bi-door-closed-fill mx-4"></i>Manage Kamar</a></li>
              <li class="menuhover"><a class=" @if(Request::is('manage_user')) menuaktif @endif" href="{{route ('manage_user') }}"><i class="bi bi-people-fill mx-4"></i>Daftar Pengguna</a></li>
              <li class="menuhover"><a class=" @if(Request::is('manage_keuangan')) menuaktif @endif" href="{{route ('manage_keuangan') }}"><i class="bi bi-credit-card-2-front-fill mx-4"></i>Riwayat Transaksi</a></li>
              <li class="menuhover"><a class=" @if(Request::is('manage_informasi')) menuaktif @endif" href="{{route ('manage_informasi') }}"><i class="bi bi-sticky-fill mx-4"></i>Manage Postingan</a></li>
              <li class="logout "><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form2').submit();"><i class="bi bi-box-arrow-left mx-4"></i>Logout</a></li>
            </ul>
          </nav>
        </div>


        <div class="col-span-12 lg:col-span-10 w-full px-4">
          <div class=" py-1 mt-20 rounded-md px-4 text-sm font-poppins text-blue ">
            <h3>@yield('layout')</h3>
          </div>


        </div>
      </div>
    </div>
  </section>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>
  <form id="logout-form2" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>

</body>

</html>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>

