@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Pembayaran</h3>
</div>

<div class="mt-4 relative overflow-x-auto">
  <table class="table-auto font-semibold text-sm w-full rtl:text-right">
    <thead class="rounded-md">
      <tr>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> NIM</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori Mahasiswa</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kelamin</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kamar</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Durasi</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Bukti Pembayaran</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Harga</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Tanggal</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
      </tr>
    </thead>

    <tbody>
    @foreach ($data as $data)
      <tr>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">{{ ++$i }}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->berkas->user->name}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->user->nim}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->kategori}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->user->jenis_kelamin}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light mr-6">
          <h3 class="mt-2 bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit font-extralight">{{$data->berkas->jeniskamar}}</h3>
        </td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><span>{{$data->berkas->durasi}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><a class="text-blue" href="{{ asset('storage/bukti/' . $data->bukti_pembayaran) }}" target="_blank">Lihat Bukti</a></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->berkas->harga}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->created_at->format('d-m-Y')}}</td>

    @if($data->kamar_id == 0)
      <td class="bg-white border-b-silver border-b-4 text-gray-dark px-2 py-4 font-light whitespace-nowrap items-center text-center flex gap-4">
          <form action="{{ route('confirm.bayar', $data->id) }}" method="POST">
    @if($data->status == 0)
          <a class="bg-red bg-opacity-25 text-red px-4 py-[10px] rounded-md hover:bg-red hover:text-white transition-all reject" data-id="{{ $data->id }}" type="" data-nama="{{ $data->berkas->user->name }}" href="#">Reject</a>
    @elseif($data->status == 1)
          <a class="bg-red bg-opacity-25 text-red px-4 py-2 rounded-md hover:bg-red hover:text-white transition-all reject" data-id="{{ $data->id }}" type="" data-nama="{{ $data->berkas->user->name }}" href="#">Delete</a>
    @endif

    @csrf
    @method('POST')
    @if($data->status == 0)
      <button class="bg-green bg-opacity-25 text-green px-4 py-2 rounded-md hover:bg-green hover:text-white transition-all" type="submit">Accept</button>
    @elseif($data->status == 1)
      <a class="bg-green bg-opacity-25 text-green px-4 py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/accept/{{ $data->id }}">Tentukan Kamar</a>
    @endif
      </form>
    </td>

      @elseif($data->kamar_id !== 0)
      <td class="bg-white border-b-silver border-b-4 text-gray-dark px-2 py-4 font-light whitespace-nowrap items-center text-center flex gap-4">
            <a class="bg-red bg-opacity-25 text-red px-4 py-2 rounded-md hover:bg-red hover:text-white transition-all reject" data-id="{{ $data->id }}" type="" data-nama="{{ $data->berkas->user->name }}" href="#">Delete</a>
      </td>
      @endif
      </tr>

@endforeach
    </tbody>
  </table> 

  



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
