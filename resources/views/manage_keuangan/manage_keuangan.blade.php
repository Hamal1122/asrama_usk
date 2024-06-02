@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage Keuangan</h3>
</div>

<form action="/manage_keuangan" method="get">
      <div class="flex gap-6">
          <div class="mt-4 flex items-center bg-white w-fit px-4 hover:gap-6 transition-all py-2 gap-2 rounded-md">
            <div>
            <i class="bi bi-search"></i>
            </div>
                <input type="text" value="{{ request('search') }}" name="search" id="search" placeholder="Search NIM" class="py-1 px-2 rounded-sm text-sm">
          </div>

         <div class="mt-4 flex items-center text-gray-dark  bg-white w-fit px-4 hover:gap-6 transition-all py-2 gap-2 rounded-md">
          <i class="bi bi-funnel text-blue"></i>
        <select name="kategori">
            <option value="">Select Category</option>
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

<div class=" overflow-x-auto mt-6">
  @if($data->isNotEmpty())
  <table class="table-auto font-semibold text-sm overflow-x-auto w-full ">
    <thead class="rounded-md">
      <tr class="font-poppins text-xs">
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Tanggal</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> NIM</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kamar</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Durasi</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Harga</th>
        <th class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Status Pembayaran</th>

      </tr>
    </thead>

    <tbody>
      @foreach ($data as $data => $item)
      <tr class="font-poppins text-xs">
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">{{ ++$i }}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{ date('d F Y', strtotime($item->created_at)) }}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$item->user->name}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$item->user->nim}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light whitespace-nowrap"><span class="text-abu">{{$item->kategori}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{$item->jeniskamar}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{$item->durasi}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light whitespace-nowrap"><span class="text-abu">{{$item->formatRupiah('harga')}}</span></td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light mr-6">
          <h3 class="mt-2 bg-green  bg-opacity-10 text-green text-center px-2 py-1 rounded-full text-xs font-poppins">Berhasil</h3>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  @else
  <p>No data found</p>
@endif
</div>
{{ $paginate->links() }}

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
<script>
  @if(Session::has('berhasil'))
  toastr.success("{{ Session::get('berhasil') }}")
  @endif
</script>
@endsection

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
