@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3>Profile</h3>
  </div>
  <div class="bg-white py-4 mt-4 rounded-md ">
    <div class="p-4 bg-white flex gap-4 flex flex-wrap justify-between">

      <div class="my-auto flex flex-wrap text-gray-dark font-Inter mx-auto md:mx-4">

        <div class="mx-auto md:mx-0">
          <img class="w-fit h-40 rounded-lg mx-auto md:mx-4" src="https://akcdn.detik.net.id/community/media/visual/2022/12/31/cristiano-ronaldo-4.jpeg?w=700&q=90" alt="">
        </div>

        <div class="mx-auto md:mx-2">
          <h3 class="my-2">Nama : Bang Do</h3>
          <h3 class="my-2">No.Telpon : 082292389762</h3>
          <h3 class="my-2">Program Studi : Informatika</h3>
          <h3 class="my-2">Email : andi@gmail.com</h3>
          <h3 class="my-2">Gender : Laki-laki</h3>
        </div>

      </div>
      <div class="">
        <a class="button h-fit mx-12 md:mx-6 px-4 " href="{{route ('edit_profile') }}"><i class="bi bi-pencil-square mr-2"></i>Edit</a>
      </div>

    </div>
  </div>

  @endsection