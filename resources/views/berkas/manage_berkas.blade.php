@extends('Layout.admin')

@section('layout')
<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Berkas</h3>
</div>

<div class="mt-4">
  <table class="table-auto justify-end font-semibold text-sm w-full rounded-md min-w-full ">
    <thead class="rounded-md">
      <tr>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> NIM</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Status</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
      </tr>
    </thead>

    <tbody>
      <tr class="">
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-6  text-left font-light">1</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light">Hamal</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light">2008107010045</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light mr-6">
          <h3 class="mt-2 bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit font-extralight">Diterima</h3>
        </td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light"><span class="text-green">Reguler</span></td>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-6  text-left font-light">
          <a class="bg-yellow bg-opacity-25 text-yellow px-4  py-2 rounded-md hover:bg-yellow hover:text-white transition-all" href="">Lihat</a>
        </td>
      </tr>

    </tbody>
  </table>
</div>
@endsection