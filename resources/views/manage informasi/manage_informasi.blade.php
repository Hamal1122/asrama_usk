@extends('Layout.admin')

@section('layout')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2   rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="" class="  px-2 my-auto hover:bg-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Manage Informasi </h3>
  </div>


  <!-- @if ($message = Session::get('berhasil'))
  <div class="bg-green bg-opacity-10 text-green px-4  py-4 rounded-md mt-2"><i class="bi bi-check-circle-fill px-2"></i>{{ $message }}</div>
  @endif -->

  <div class="p-4 bg-gray-soft my-4 rounded-md">
    <div class="my-4">
      <a class="text-center bg-green  hover:text-white hover:px-10 text-white px-8 py-4 rounded-md transition-all focus:scale-95"" href="{{route ('tambahInformasi') }}"><i class="bi bi-plus"></i>Tambah Postingan</a>
    </div>

    <div>
      <h1 class="font-Inter text-sm mt-6 ">Data Informasi :</h1>
    </div>

    @foreach ($data as $post)
    <div class="bg-white text-gray-dark text-sm font-poppins px-4 py-4 rounded-md mt-4">
      <div class="order-2 gap-6">
        <div class="flex justify-between">
          <div>
            <h1 class="text-3xl mb-2 text-gray-dark">{{ $post->judul }}</h1>
          </div>
          <div>
            <h1 class="text-xs font-light bg-abu bg-opacity-10 text-abu py-1 px-2 rounded-lg w-fit">Posted {{ $post->created_at->diffForHumans() }}</h1>
          </div>
        </div>
        <div class="my-2 text-gray-dark">
          <h3 class="mt-4">Mulai : <span class="font-bold">{{ date('d F Y', strtotime($post->tgl_mulai)) }}</span><span class="mx-4 bg-green bg-opacity-20 px-2 py-1 text-sm text-green rounded-full ">{{ date('H:i', strtotime($post->tgl_mulai)) }} WIB</span></h3>
          <h3 class="mt-4">Selesai : <span class="font-bold">{{ date('d F Y', strtotime($post->tgl_berakhir)) }}</span><span class="mx-4 bg-red bg-opacity-20 px-2 py-1 text-sm text-red rounded-full ">{{ date('H:i', strtotime($post->tgl_berakhir)) }} WIB</span></h3>
          <h3 class="mt-4">Tempat : <span class="font-bold">{{ $post->tempat }}</span></h3>
          <h3 class="mt-4">Deskripsi : </h3>
          <p class="bg-blue bg-opacity-10 mt-2 py-4 px-4 rounded-md">{{ $post->deskripsi }}</p>
          <div class="flex gap-4 mt-4">
            <a class="bg-green bg-opacity-25 text-green px-4  py-2 rounded-md hover:bg-green hover:text-white transition-all" href="/tampil_informasi/{{ $post->id }}"><i class="bi bi-pencil-square mx-2"></i>Edit</a>
            <a href="#" class="bg-red bg-opacity-25 text-red px-4  py-2 rounded-md hover:bg-red hover:text-white transition-all delete" data-id="{{ $post->id }}" type="" data-judul="{{ $post->judul }}"><i class="bi bi-trash-fill mx-2"></i>Delete</a>
          </div>
        </div>

      </div>
    </div>
    @endforeach
  </div>


  <!-- Script popup delete -->
  <script>
    $('.delete').click(function() {
      var postid = $(this).attr('data-id');
      var judul = $(this).attr('data-judul');
      swal({
          title: "Kamu Yakin ?",
          text: "Kamu akan menghapus postingan dengan judul " + judul + " ",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/delete_informasi/" + postid + ""
            swal("Yeay! Postingan telah berhasi dihapus!", {
              icon: "success",
            });
          } else {
            swal("hufft! Postinganmu tidak jadi dihapus");
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