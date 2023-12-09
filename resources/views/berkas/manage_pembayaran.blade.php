@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Pembayaran</h3>
</div>

<div class="mt-4 overflow-x-auto">
  <table class="table-auto  justify-end font-semibold text-sm ">
    <thead class="rounded-md">
      <tr>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> NIM</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori Mahasiswa</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kelamin</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kamar</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Durasi</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Bukti Pembayaran</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Harga</th>
        <!-- <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kamar</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Tanggal Masuk</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Tanggal Keluar</th> -->
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
      </tr>
    </thead>

    <tbody>
    @foreach ($data as $data)
      <tr class="">
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">{{ ++$i }}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->user->name}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->user->nim}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->kategori}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->user->jenis_kelamin}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light mr-6">
          <h3 class="mt-2 bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit font-extralight">{{$data->berkas->jeniskamar}}</h3>
        </td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><spa>{{$data->berkas->durasi}}</spa></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><a class="text-blue" href="{{ asset('storage/bukti/' . $data->bukti_pembayaran) }}" target="_blank">Lihat Bukti</a></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->harga}}</td>
   
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-4  text-left font-light">
          <a class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all reject"  data-id="{{ $data->id }}" type="" data-nama="{{$data->berkas->user->name}}" href="#">Reject</a>
        </td>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-4  text-left font-light">
          <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href="">Accept</a>
        </td>
      </tr>

@endforeach
    </tbody>
  </table>
</div>

<script>
  $('.reject').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Reminder",
        text: "Kamu akan MENOLAK berkas dari mahasiswa bernama " + nama + " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/reject_pembayaran/" + id + ""
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
