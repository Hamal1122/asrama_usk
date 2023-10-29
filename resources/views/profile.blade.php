@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Profile</h3>
  </div>
  <div class="bg-white py-4 mt-4 rounded-md">
    <div class="p-4 bg-white flex gap-4 mx-auto">
      <img class="w-fit h-40 " src="https://img.okezone.com/content/2023/10/29/46/2910314/jude-bellingham-banjir-pujian-usai-jadi-pahlawan-real-madrid-kalahkan-barcelona-luka-modric-bakat-luar-biasa-exAS8Sc5SC.jpg" alt="">
      <div class="my-auto text-gray-dark font-Inter">
        <h3 class="my-2">Nama : Andi</h3>
        <h3 class="my-2">No.Telpon : 082292389762</h3>
        <h3 class="my-2">Program Studi : Informatika</h3>
        <h3 class="my-2">Email : andi@gmail.com</h3>
        <h3 class="my-2">Gender : Laki-laki</h3>
      </div>
    </div>
    <a class="button w-fit h-fit mx-4 px-4 " href=""><i class="bi bi-pencil-square mr-2"></i>Edit</a>
  </div>
  @endsection