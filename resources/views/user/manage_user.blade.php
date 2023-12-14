@extends('Layout.admin')

@section('layout')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
  <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
  <h3 class="py-2">Manage User</h3>
</div>

<form action="/manage_user" method="get">
<div class="mt-3 flex items-center bg-white w-fit px-4 hover:gap-6 transition-all py-2 gap-2 rounded-md">
  <div>
  <i class="bi bi-search"></i>
  </div>
      <input type="search" name="search" id="search" placeholder="Search NIM" class="py-1 px-2 rounded-sm text-sm">
</div>
</form>

<div class=" relative overflow-x-auto">
  <table class="table-auto font-semibold text-sm w-full rtl:text-right">
    <thead class="rounded-md">
      <tr>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">No</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Nama </th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> NIM</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Email</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> No. HP</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left ">Status</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Kategori Mahasiswa</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> Jenis Kelamin</th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
        <th scope="col" class="bg-purple bg-opacity-10  text-purple px-6 py-2 tracking-wide text-left "> </th>
      </tr>
    </thead>

    <tbody>
    @foreach ($data as $data)
      <tr>
      @if($data->status == 1)
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">{{ ++$i }}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->user->name}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->user->nim}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->user->email}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->user->no_hp}}</td>
        <td class="bg-white border-b-silver border-b-4 text-green px-6 py-4 tracking-wide text-left font-light"><span class="bg-green bg-opacity-20 px-4 py-1 rounded-full">Aktif</span></td> 
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->berkas->kategori}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light">{{$data->user->jenis_kelamin}}</td>
        <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light"></td>
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-2 py-4  text-left font-light">
          <a class="bg-yellow bg-opacity-25 text-yellow px-4  py-2 rounded-md hover:bg-yellow hover:text-white transition-all" href="/detail_user/{{ $data[ 'id' ] }}">Detail</a>
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
