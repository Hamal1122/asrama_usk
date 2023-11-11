@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="col-span-12 lg:col-span-10 w-full px-4">
<div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
    <a href="{{route ('manage_kamar') }}" class="bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Lihat Kamar</h3>
  </div>

  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-gray-dark mt-4">
    <h3 class="py-2 font-semibold text-2xl"><span>Gedung</span><span>  </span>{{ $gedung->nama }}</h3>
  </div>

  <div class="mt-4 p-4 bg-gray-soft rounded-md">

    <div class="my-4">
      <a class="button bg-green hover:bg-tahiti py-2 px-4 " href=""><i class="bi bi-plus"></i>Tambah Kamar</a>
    </div>



    <table class="table-auto border-collapse justify-end font-semibold text-sm w-full rounded-md">
      <thead class="rounded-md">
        <tr>
          <th class="bg-purple bg-opacity-10 text-purple px-6 py-2 tracking-wide text-left ">No</th>
          <th class="bg-purple bg-opacity-10 text-purple px-6 py-2 tracking-wide text-left ">Nama Kamar</th>
          <th class="bg-purple bg-opacity-10 text-purple px-6 py-2 tracking-wide text-left ">Nama Gedung</th>
          <th class="bg-purple bg-opacity-10 text-purple px-6 py-2 tracking-wide text-left ">Kapasitas</th>
          <th class="bg-purple bg-opacity-10 text-purple px-6 py-2 tracking-wide text-left "></th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td class="bg-white text-gray-dark px-6 py-6 tracking-wide text-left font-light"></td>
          <td class="bg-white text-gray-dark px-6 py-6 tracking-wide text-left font-light"></td>
          <td class="bg-white text-gray-dark px-6 py-6 tracking-wide text-left font-light"></td>
          <td class="bg-white text-gray-dark px-6 py-6 tracking-wide text-left font-light"><span class="text-green"><span class="text-abu"></span></span></td>
          <td class="bg-white text-gray-dark px-6 py-6 tracking-wide text-left font-light mr-6">
            <a class="bg-yellow bg-opacity-25 text-yellow px-4  py-2 rounded-md hover:bg-yellow hover:text-white transition-all" href=""><i class="bi bi-door-closed-fill mx-2"></i></i></a>
            <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href=""><i class="bi bi-pencil-square mx-2"></i></a>
            <a href="#" class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all delete" data-id="" type="" data-nama=""><i class=" bi bi-trash-fill mx-2"></i></a>
          </td>
        </tr>

      </tbody>
    </table>
  </div>


</div>
@endsection