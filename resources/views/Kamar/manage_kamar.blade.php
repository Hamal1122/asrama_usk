@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Manage Kamar</h3>
  </div>

  <div class="mt-4 p-4 bg-white rounded-md">

    <div class="flex gap-4 items-center">
      <form action="/manage_kamar" method="get">
        <div class="mt-3 flex items-center bg-white w-fit px-4 hover:gap-6 transition-all py-2 gap-2 rounded-md border border-gray-soft">
          <div>
          <i class="bi bi-search"></i>
          </div>
              <input type="search" name="search" id="search" placeholder="Cari gedung" class="py-1 px-2 rounded-sm text-sm">
        </div>
        </form>
      <div class="my-4">
        <a class="text-center bg-purple hover:text-white hover:px-10 text-white px-4 py-3 rounded-md transition-all focus:scale-95" href="{{route ('tambah gedung') }}"><i class="bi bi-plus"><span> </span></i>Tambah Gedung</a>
      </div>
      <div class="my-4">
        <a class="text-center bg-green  hover:text-white hover:px-10 text-white px-4 py-3 rounded-md transition-all focus:scale-95" href="{{route ('tambah kamar') }}"><i class="bi bi-plus"><span> </span></i>Tambah Kamar</a>
      </div>

      <div class="relative">
    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-dark bg-white border border-abu border-opacity-10 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" onclick="toggleDropdown()">Kategori Gedung
        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
    </button>

    <!-- Menu dropdown -->
    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44  absolute mt-2">
        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#" class="block px-4 py-2 text-gray-dark hover:text-white hover:bg-blue">Laki - laki</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-gray-dark hover:text-white hover:bg-blue">Perempuan</a>
            </li>
        </ul>
    </div>
</div>

    </div>


    <div class="overflow-y-auto">
      <table class="table-auto justify-end font-semibold text-sm w-full rounded-md min-w-full mt-4 border border-gray-soft ">
        <thead class="rounded-md">
          <tr>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama Gedung</th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori</th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jumlah Kamar </th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "></th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "></th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "></th>
          </tr>
        </thead>
        @foreach ($gedung as $gedung)
        <tbody>
          <tr class="">
            <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-6  text-left font-light">{{ ++$i }}</td>
            <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light">{{ $gedung->nama }}</td>
            <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light"><span class="bg-blue bg-opacity-10 text-purple py-1 px-2 rounded-lg">{{ $gedung->kategori_gedung }}</span></td>
            <td class="bg-white border-b-silver border-b-4 text-green px-6 py-6 tracking-wide text-left font-light">{{ $gedung->jumlahkamar }}<span class="text-green"> Kamar</span></td>
            <td class="bg-white border-b-silver border-b-4 text-green px-6 py-6 tracking-wide text-left font-light"><span class="text-green"></span></td>
            <td class="bg-white border-b-silver border-b-4 text-green px-6 py-6 tracking-wide text-left font-light"><span class="text-green"></span></td>
    
            <td class="bg-white border-b-silver border-b-4 text-gray-dark  py-6 tracking-wide text-left font-light">
              <a class="bg-yellow bg-opacity-25 text-yellow px-4  py-2 rounded-md hover:bg-yellow hover:text-white transition-all" href="/gedung/{{ $gedung[ 'id' ] }}"><i class="bi bi-door-closed-fill mx-2"></i></i>Kamar</a>
              <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/update_gedung/{{ $gedung->id }}"><i class="bi bi-pencil-square mx-2"></i>Edit</a>
             <a href="#" class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all delete" data-id="{{ $gedung->id }}" type="" data-nama="{{ $gedung->nama }}"><i class=" bi bi-trash-fill mx-2"></i>Delete</a>
            </td>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>


</div>
<script>
  $('.delete').click(function() {
    var gedungid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Kamu Yakin ?",
        text: "Kamu akan menghapus gedung dengan nama " + nama + " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete_gedung/" + gedungid + ""
          swal("Data telah berhasi dihapus!", {
            icon: "success",
          });
        } else {
          swal(" Data tidak jadi dihapus");
        }
      });
  });
</script>

{{-- dropdwown --}}
<script>
    function toggleDropdown() {
        var dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>

<script>
  @if(Session::has('berhasil'))
  toastr.success("{{ Session::get('berhasil') }}")
  @endif
</script>
@endsection

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>