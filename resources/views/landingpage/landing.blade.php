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
           <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
    
            .fade {
                opacity: 0;
                transition: opacity 1s ease-in-out;
            }
    
            .fade-in {
                opacity: 1;
            }
    
            .fade-out {
                opacity: 0;
            }
        </style>
      </head>

<body class="relative">
    <nav class= "absolute bg-purple bg-opacity-70 shadow-md fixed flex justify-between w-full px-6 py-4">
        <div class="flex-1 text-white">
          <a class="btn btn-ghost text-sm">Asrama USK</a>
        </div>
        <div class="text-white">
            <a href="" class="btn btn-ghost text-sm mx-4">Panduan</a>
            <a href="" class="btn btn-ghost text-sm mx-4">Panduan</a>
            <a href="" class="btn btn-ghost text-sm mx-4">Panduan</a>
        </div>
    </nav>

    <section class="bg-purple h-screen py-12 px-24 mx-auto " id="section1">
        <div class="container lg:flex justify-between items-center"> 
            <div class="text-white mt-10">
                <h1 class="text-2xl lg:text-6xl font-poppins font-bold">Selamat Datang</h1>
                <h1 class="lg:mt-4 text-4xl lg:text-6xl font-poppins font-bold text-yellow">AsramaUSK</h1>
                <h3 class="mt-4 text-base lg:text-lg   font-poppins font-medium">Layanan Pengajuan Kamar Asrama Universitas Syiah Kuala Berbasis Online</h3>
            <div class="mt-6">
                <a href="" class="bg-transparent border px-6 py-3 rounded-md hover:bg-white hover:text-purple transition-all hover:bg-opacity-70">Info</a>
                <a href="{{route ('login') }}" class="ml-2 bg-white px-8 py-3 rounded-md text-purple hover:bg-opacity-70 transition-all">Login</a>
            </div>
            </div>
            <div>
                <img class="w-[500px]" src="images/landing.svg" alt="">
            </div>
        </div>
    </section>

    <section class="bg-white h-screen py-12 px-24 mx-auto" id="section2">
      <div class="mt-6 flex justify-between gap-20">

        <div class="w-1/2">
          <img class="w-[700px]" src="images/hero2.png" alt="">
        </div>

        <div class=" w-1/2 mt-10 ">
          <h1 class="text-center items-center text-3xl font-black font-poppins">Keunggulan</h1>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium text-center mt-12">
            <i class="bi bi-star-fill text-yellow text-2xl"></i>
            <h1>Sistem Pengajuan Kamar Yang Mudah Dan Efisien</h1>
          </div>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium text-center mt-12">
            <i class="bi bi-star-fill text-yellow text-2xl"></i>
            <h1>Informasi Yang Transparan Dan Mudah Diakses</h1>
          </div>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium text-center mt-12">
            <i class="bi bi-star-fill text-yellow text-2xl"></i>
            <h1>Pengelolaan Data Yang Cepat Dan Akurat</h1>
          </div>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium text-center mt-12">
            <i class="bi bi-star-fill text-yellow text-2xl"></i>
            <h1>Tampilan Yang User Friendly Dan Mudah Digunakan</h1>
          </div>

        </div>
      </div>
    </section>


    <section class="bg-purple h-screen py-12 px-24 mx-auto" id="section3">
      <div class="mt-6 flex justify-between gap-20">

        <div class="w-1/2">
          <img class="w-[700px]" src="images/berkas.png" alt="">
        </div>

        <div class=" w-1/2 mt-10 text-white">
          <h1 class="text-center items-center text-3xl font-black  font-poppins">Tahapan Pengajuan Kamar</h1>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium  mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312z"/>
            </svg>
            <h1>Mahasiswa login dengan menggunakan NIM dan Password</h1>
          </div>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium  mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
            </svg>
            <h1>Mahasiswa mengupload berkas pengajuan</h1>
          </div>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
            </svg>
            <h1>Mahasiswa menunggu pengecekan berkas oleh operator</h1>
          </div>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium  mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-4-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176zM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218"/>
            </svg>
            <h1>Mahasiswa mengupload bukti pembayaran</h1>
          </div>
   
          <div class="flex text-lg font-poppins items-center gap-6 font-medium mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-5-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z"/>
            </svg>
            <h1>Mahasiswa menunggu pengecekan pembayaran oleh operator</h1>
          </div>

          <div class="flex text-lg font-poppins items-center gap-6 font-medium mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-6-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.21 3.855c-1.868 0-3.116 1.395-3.116 4.407 0 1.183.228 2.039.597 2.642.569.926 1.477 1.254 2.409 1.254 1.629 0 2.847-1.013 2.847-2.783 0-1.676-1.254-2.555-2.508-2.555-1.125 0-1.752.61-1.98 1.155h-.082c-.012-1.946.727-3.036 1.805-3.036.802 0 1.213.457 1.312.815h1.29c-.06-.908-.962-1.899-2.573-1.899Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582"/>
            </svg>
            <h1>Mahasiswa menempati kamar pada tanggal yang ditentukan</h1>
          </div>

        </div>
      </div>
    </section>

    <section class="bg-purple h-screen py-12 px-24 mx-auto" id="section4">
      <div class="mt-6 flex justify-between gap-20">



        <div class=" w-1/2 mt-10 text-white">
          <h1 class="text-left items-center text-4xl font-black  font-poppins">Download template Surat yang diperlukan !</h1>
          <p class="text-left items-center text-sm font-light font-poppins mt-4">Silahkan download template surat yang kamu butuhkan untuk melakukan pengajuan kamar di web Asrama USK, pastikan template yang kamu dowload sesuai yaa !!</p>

          <div class="text-lg font-poppins items-center font-medium gap-6  mt-10">
            <h1 class="text-yellow">Surat Pernyataan Tinggal di Asrama ( Mahasiswa Reguler )</h1>
            <div class="mt-6">
              <a class="px-6 py-3 border rounded-lg hover:bg-white hover:text-purple transition-all" href="\template\pernyataan.pdf">Download</a>
            </div> 
          </div>

          <div class="text-lg font-poppins items-center font-medium gap-6  mt-10">
            <h1 class="text-yellow">Surat Pernyataan Tinggal di Asrama ( Mahasiswa KIPK )</h1>
            <div class="mt-6">
              <a class="px-6 py-3 border rounded-lg hover:bg-white hover:text-purple transition-all" href="\template\pernyataan_kip.pdf">Download</a>
            </div> 
          </div>
          

        </div>

        <div class="w-1/2">
          <img class="w-[700px]" src="images/berkas2.png" alt="">
        </div>
      </div>
    </section>

    <section class="bg-purple h-screen py-12 px-24 mx-auto" id="section5">
      <div class="container mt-6 flex justify-between gap-20 items-center text-center">
        <div class="mx-auto">
          <h1 class="text-center items-center text-3xl font-black text-white mt-6  font-poppins">Budaya Asrama</h1>
          <div class="flex my-auto mt-20 gap-4">
            <div class="bg-white p-10">
              <h1>hhhhh</h1>
            </div>
            <div class="bg-white p-10">
              <h1>hhhhh</h1>
            </div>
            <div class="bg-white p-10">
              <h1>hhhhh</h1>
            </div>
            <div class="bg-white p-10">
              <h1>hhhhh</h1>
            </div>
            <div class="bg-white p-10">
              <h1>hhhhh</h1>
            </div>
          </div>
          
          
        </div>
      </div>
    </section>

    


   
        </div>          
    </div>
</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const sections = document.querySelectorAll('section');
  
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("fade-in");
        entry.target.classList.remove("fade-out");
      } else {
        entry.target.classList.add("fade-out");
        entry.target.classList.remove("fade-in");
      }
    });
  }, observerOptions);

  sections.forEach(section => {
    section.classList.add('fade'); // Initial state
    observer.observe(section);
  });
});
</script>
