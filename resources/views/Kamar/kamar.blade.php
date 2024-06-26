@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2 rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{route ('manage_kamar') }}" class="bi bi-arrow-left-short px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Lihat Kamar</h3>
  </div>

  <div class="mt-4 p-4 bg-white rounded-md">

    <table class="table-auto font-semibold text-sm w-full bg-white shadow-md p-4 rounded-md">
      <thead class="rounded-md">
        <tr class="font-poppins text-xs">
          <th class="bg-white border-b-2 border-opacity-20 text-purple px-6 py-4 tracking-wide text-left ">No</th>
          <th class="bg-white border-b-2 border-opacity-20 text-purple px-6 py-4 tracking-wide text-left ">Nama Kamar</th>
          <th class="bg-white border-b-2 border-opacity-20 text-purple px-6 py-4 tracking-wide text-left ">Nama Gedung</th>
          <th class="bg-white border-b-2 border-opacity-20 text-purple px-6 py-4 tracking-wide text-left ">Kapasitas</th>
          <th class="bg-white border-b-2 border-opacity-20 text-purple px-6 py-4 tracking-wide text-left ">Harga Kamar</th>
          <th class="bg-white border-b-2 border-opacity-20 text-purple px-6 py-4 tracking-wide text-left "></th>
        </tr>
      </thead>

      @foreach ($kamar as $kamar)

      <tbody>
        <tr class="font-poppins text-xs">
          <td class="bg-white border-b-silver border-b-4 text-gray-dark w-fit text-left px-6 py-6 tracking-wide font-light">{{ ++$i }}</td>
          <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light">{{ $kamar->nama }}</td>
          <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light">{{ $kamar->gedung->nama }}</td>
          <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light"><span class="text-green">{{ $kamar->jumlahpenghuni }}<span class="text-abu"><span> / </span>{{ $kamar->kapasitas }} Orang</span></span></td>
           <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light">{{ $kamar->formatRupiah('harga') }} / Pertahun</td>
          <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-6 tracking-wide text-left font-light mr-6">
            <a class="bg-blue bg-opacity-25 text-blue px-4  py-2 rounded-md hover:bg-blue hover:text-white transition-all" href="/detail_kamar/{{ $kamar[ 'id' ] }}"><i class="bi bi-door-closed-fill mx-2"></i></i></a>
            <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/update_kamar/{{ $kamar->id }}"><i class="bi bi-pencil-square mx-2"></i></a>
            <a href="#" class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all delete" data-id="{{ $kamar->id }}" type="" data-nama="{{ $kamar->nama }}"><i class=" bi bi-trash-fill mx-2"></i></a>
          </td>
        </tr>

      </tbody>
      @endforeach
    </table>
  </div>

</div>
<script>
  $('.delete').click(function() {
    var kamarid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Kamu Yakin ?",
        text: "Kamu akan menghapus data dengan nama " + nama + " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete_kamar/" + kamarid + ""
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