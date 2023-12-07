@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Pengawas</h3>
</div>

<div class="mt-4">
    <div>
        <a class="bg-green bg-opacity-20 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all"  href="{{route ('tambah_pengawas') }}">Tambah Pengawas</a>
    </div>
</div>

<div class="mt-4 overflow-x-auto w-full">
  <table class="table-auto w-full  justify-end font-semibold text-sm ">
    <thead class="rounded-md">
      <tr>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No. Telp</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Jenis Kelamin</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Gedung</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
      </tr>
    </thead>
    @foreach ($data as $data)
    <tbody>
      <tr class="">
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">1</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->nama}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">0{{$data->no_hp}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->jenis_kelamin}}</td>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-4  text-left font-light">{{$data->gedung->nama}}</td>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-4  text-left font-light">
            <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/update_pengawas/{{ $data->id }}">Edit</a>
          <a class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all delete"  data-id="{{ $data->id }}" type="" data-nama="{{ $data->nama }}" href="#">Delete</a>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

<script>
  $('.delete').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Reminder",
        text: "Anda akan menghapus data pengawas bernama " + nama + " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete_pengawas/" + id + ""
          swal("Data telah berhasi Di TOLAK!", {
            icon: "success",
          });
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
