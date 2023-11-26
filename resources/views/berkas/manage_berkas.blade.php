@extends('Layout.admin')

@section('layout')
<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Berkas</h3>
</div>

<div class="mt-4 overflow-x-auto">
  <table class="table-auto  justify-end font-semibold text-sm ">
    <thead class="rounded-md">
      <tr>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> NIM</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Berkas</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Status</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori Gedung</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kamar</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Durasi</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Harga</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
      </tr>
    </thead>

    <tbody>
      @foreach ($berkas as $berkas)
      <tr class="">
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">{{ ++$i }}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$berkas->user->name}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$berkas->user->nim}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$berkas->nama_berkas}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light mr-6">
          <h3 class="mt-2 bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit font-extralight">{{$berkas->status}}</h3>
        </td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><span class="text-blue">{{$berkas->kategori}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><span class="text-abu">{{$berkas->kategorigedung}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><span class="text-abu">{{$berkas->jeniskamar}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><span class="text-blue">{{$berkas->durasi}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><span class="text-green">{{$berkas->harga}}</span></td>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-4  text-left font-light">
          <a class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all" href="">Reject</a>
        </td>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-4  text-left font-light">
          <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href="">Accept</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection