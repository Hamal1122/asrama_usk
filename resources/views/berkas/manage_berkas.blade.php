@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Berkas</h3>
</div>

<form action="/manage_berkas" method="get">
      <div class="flex gap-6">
          <div class="mt-4 flex items-center bg-white w-fit px-4 hover:gap-6 transition-all py-2 gap-2 rounded-md">
            <div>
            <i class="bi bi-search"></i>
            </div>
                <input type="text" value="{{ request('search') }}" name="search" id="search" placeholder="Cari NIM" class="py-1 px-2 rounded-sm text-sm">
          </div>

         <div class="mt-4 flex items-center text-gray-dark  bg-white w-fit px-4 hover:gap-6 transition-all py-2 gap-2 rounded-md">
          <i class="bi bi-funnel text-blue"></i>
        <select name="kategori">
            <option value="">Pilih Category</option>
            @foreach($categories as $kategori)
                <option value="{{ $kategori }}" {{ request('kategori') == $kategori ? 'selected' : '' }}>
                    {{ $kategori }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="text-blue">Cari</button>
      </div>
      </div>
  </form>

<div class=" overflow-x-auto bg-white shadow-md p-4 rounded-md">
  <table class="table-auto font-semibold text-sm overflow-x-auto ">
    <thead class="rounded-md">
      <tr class="font-poppins text-xs">
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> NIM</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> Berkas</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> Kategori</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> Kategori Gedung</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kamar</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> Durasi</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> Harga</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> Status</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> </th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-2 tracking-wide text-left "> </th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $berkas)
      <tr class="font-poppins text-xs">
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">{{ ++$i }}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$berkas->user->name}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$berkas->user->nim}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">
         <a class=" text-blue py-1 rounded-full" href="\storage\uploads\{{$berkas->nama_berkas}}">Lihat</a> 
        </td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light whitespace-nowrap"><span class="text-abu">{{$berkas->kategori}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{$berkas->kategorigedung}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{$berkas->jeniskamar}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{$berkas->durasi}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light whitespace-nowrap"><span class="text-abu">{{$berkas->formatRupiah('harga')}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light mr-6">
          @if($berkas->status == 0)
          <h3 class="mt-2 bg-abu  bg-opacity-10 text-abu px-2 py-1 text-center rounded-full text-xs font-light">Menunggu</h3>
          @elseif($berkas->status == 1)
          <h3 class="mt-2 bg-green  bg-opacity-10 text-green text-center px-2 py-1 rounded-full text-xs font-light">Diterima</h3>
          @endif
        </td>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-2  text-left font-light"> 
           @if($berkas->status == 0)
          <a class="bg-red bg-opacity-25 text-red px-4 py-[10px] rounded-md hover:bg-red hover:text-white transition-all reject" data-id="{{ $berkas->id }}" data-nama="{{ $berkas->user->name }}" href="#" id="rejectButton">Reject</a>
          @elseif($berkas->status == 1)
          {{-- <a class="bg-red bg-opacity-25 text-red px-4  py-[10px] rounded-md hover:bg-red hover:text-white transition-all reject"  data-id="{{ $berkas->id }}" type="" data-nama="{{ $berkas->user->name }}" href="#">Delete</a> --}}
          @endif
        </td>
        
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-2 tracking-wide text-left font-light items-center">
          <form id="confirmForm" action="{{ route('confirm.data', $berkas->id) }}" method="POST">
              @csrf
              @method('POST')
              @if($berkas->status == 0)
                  <button id="confirmButton" class="bg-green bg-opacity-25 text-green px-4 py-2 rounded-md hover:bg-green hover:text-white transition-all mt-2 accept" type="button">Accept</button>
              @endif
        </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  {{ $paginate->links() }}
</div>



{{-- sweetalert reject --}}
<script>
  $('.reject').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Reminder",
        text: "Yakin akan MENOLAK berkas dari mahasiswa bernama " + nama + "?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/reject/" + id + ""
          swal("Data telah berhasi Di TOLAK!", {
            icon: "success",
          });
        }    
      });
  });

  
</script>

{{-- sweetalert accept --}}
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
            confirmButtonText: 'Terima'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('confirmForm').submit();
            }
        });
    });
</script>

{{-- sweetalert reject --}}


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
                window.location = "/reject/" + id;
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
