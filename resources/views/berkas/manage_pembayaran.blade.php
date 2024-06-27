@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Pembayaran</h3>
</div>

<div class="mt-4 relative overflow-x-auto bg-white shadow-md p-4 rounded-md">
  <table class="table-auto font-semibold text-sm w-full rtl:text-right ">
    <thead class="rounded-md">
      <tr class="font-poppins text-xs   ">
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> NIM</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori Mahasiswa</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kelamin</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kamar</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Durasi</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Bukti Pembayaran</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Harga</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Tanggal</th>
        <th scope="col" class="bg-white border-b-2 border-opacity-20 bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
      </tr>
    </thead>

   <tbody>
    @foreach ($data as $data)
      <tr class="font-poppins text-xs">
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">{{ ++$i }}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->berkas->user->name}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->user->nim}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->kategori}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->user->jenis_kelamin}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light mr-6">
          <h3 class="mt-2 bg-green bg-opacity-10 text-green py-1 px-2 rounded-lg w-fit font-light">{{$data->berkas->jeniskamar}}</h3>
        </td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><span>{{$data->berkas->durasi}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"><a class="text-blue" href="{{ asset('storage/bukti/' . $data->bukti_pembayaran) }}" target="_blank">Lihat Bukti</a></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->berkas->formatRupiah('harga') }}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->created_at->format('d-m-Y')}}</td>

    @if($data->kamar_id == 0)
      <td class="bg-white border-b-silver border-b-4 text-gray-dark px-2 py-4 font-light whitespace-nowrap items-center text-center flex gap-4">
          <form id="confirmBayar" action="{{ route('confirm.bayar', $data->id) }}" method="POST">
    @if($data->status == 0)
          <a class="bg-red bg-opacity-25 text-red px-4 py-[10px] rounded-md hover:bg-red hover:text-white transition-all reject" data-id="{{ $data->id }}" data-nama="{{ $data->user->name }}" href="#" id="rejectButton">Reject</a>
    @endif

    @csrf
    @method('POST')
    @if($data->status == 0)
      <button id="confirmButton" class="bg-green bg-opacity-25 text-green px-4 py-2 rounded-md hover:bg-green hover:text-white transition-all mt-2 accept" type="button">Accept</button>
    @elseif($data->status == 1)
      <a class="bg-green bg-opacity-25 text-green px-4 py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/accept/{{ $data->id }}">Tentukan Kamar</a>
    @endif
      </form>
    </td>

      @elseif($data->kamar_id !== 0)
      <td class="bg-white border-b-silver border-b-4 text-gray-dark px-2 py-4 font-light whitespace-nowrap items-center text-center flex gap-4">
            <div class="bg-blue bg-opacity-5 text-blue px-4 py-2 rounded-md transition-all">Success</div>
      </td>
      @endif
      </tr>
      

@endforeach
    </tbody>
  </table> 
  {{ $paginate->links() }}

<script>
    document.getElementById('confirmButton').addEventListener('click', function(event) {
        event.preventDefault();
       

        Swal.fire({
            title: 'Peringatan !',
            text: "kamu yakin semua data sudah di cek dengan benar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#C7C8CC',
            confirmButtonText: 'Accept'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('confirmBayar').submit();
            }
        });
    });
</script>



<script>
    document.getElementById('rejectButton').addEventListener('click', function(event) {
        event.preventDefault();
        var id = this.getAttribute('data-id');
        var name = this.getAttribute('data-nama');

        Swal.fire({
            title: 'Peringatan!',
            text: "Kamu yakin untuk menolak pembayaran pengguna " + name,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#EE4E4E',
            cancelButtonColor: '#C7C8CC',
            confirmButtonText: 'Reject',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/reject_pembayaran/" + id;
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
{{-- <td class="bg-white border-b-silver border-b-4 text-gray-dark px-2 py-4 font-light whitespace-nowrap items-center text-center flex gap-4">
             <a class="bg-red bg-opacity-25 text-red px-4 py-[10px] rounded-md hover:bg-red hover:text-white transition-all reject" data-id="{{ $data->id }}" data-nama="{{ $data->user->name }}" href="#" id="rejectButton">Reject</a>
          <form id="confirmBayar" action="{{ route('confirm.bayar', $data->id) }}" method="POST">
              @csrf
              @method('POST')
              @if($data->status == 0)
                <button id="confirmButton" class="bg-green bg-opacity-25 text-green px-4 py-2 rounded-md hover:bg-green hover:text-white transition-all mt-2 accept" type="button">Accept</button>
              @elseif($data->status == 1)
                <a class="bg-green bg-opacity-25 text-green px-4 py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/accept/{{ $data->id }}">Tentukan Kamar</a>
              @endif
        </form>
        
      </td> --}}