@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue">
    <h3 class="py-2">Manage Kamar</h3>
  </div>

  <div class="mt-4 p-4 bg-gray-soft rounded-md">

    <div class="flex">
      <div class="my-4">
        <a class="button bg-green hover:bg-tahiti py-2 px-4 " href="{{route ('tambah gedung') }}"><i class="bi bi-plus"><span> </span></i>Tambah Gedung</a>
      </div>
      <div class="my-4">
        <a class="button bg-blue hover:bg-tahiti py-2 px-6 " href="{{route ('tambah kamar') }}"><i class="bi bi-plus"><span> </span></i>Tambah Kamar</a>
      </div>
    </div>


    <div class="overflow-y-auto">
      <table class="table-auto justify-end font-semibold text-sm w-full rounded-md min-w-full ">
        <thead class="rounded-md">
          <tr>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama Gedung</th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori</th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jumlah Kamar </th>
            <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "></th>
          </tr>
        </thead>
        @foreach ($gedung as $gedung)
        <tbody>
          <tr class="">
            <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-6  text-center font-light">{{ ++$i }}</td>
            <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light">{{ $gedung->nama }}</td>
            <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light"><span class="bg-blue bg-opacity-10 text-purple py-1 px-2 rounded-lg">{{ $gedung->kategori_gedung }}</span></td>
            <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light"><span class="text-green"></span></td>
            <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light mr-6">
              <a class="bg-yellow bg-opacity-25 text-yellow px-4  py-2 rounded-md hover:bg-yellow hover:text-white transition-all" href="/gedung/{{ $gedung[ 'id' ] }}"><i class="bi bi-door-closed-fill mx-2"></i></i></a>
              <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/update_gedung/{{ $gedung->id }}"><i class="bi bi-pencil-square mx-2"></i></a>
              <a href="#" class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all delete" data-id="{{ $gedung->id }}" type="" data-nama="{{ $gedung->nama }}"><i class=" bi bi-trash-fill mx-2"></i></a>
            </td>
          </tr>
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
<script>
  @if(Session::has('berhasil'))
  toastr.success("{{ Session::get('berhasil') }}")
  @endif
</script>
@endsection

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>