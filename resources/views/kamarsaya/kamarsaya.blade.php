@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
  <div class="bg-purple py-2 rounded-md px-4 text-sm font-poppins text-white flex gap-4">
    <a href="{{ Session::get('halaman_url_user') }}" class="px-2 my-auto hover:bg-white hover:text-purple hover:bg-opacity-25 text-xl rounded-md"></a>
    <h3 class="py-2">Kamar Saya</h3>
  </div>

  @if($data->isEmpty())
    <div class="bg-white text-gray-dark text-sm font-Inter p-4 w-full rounded-md mt-4 shadow-md">
      <h1 class="text-sm font-normal">😞 Mohon maaf saat ini kamar belum tersedia, Silahkan melakukan pengajuan terlebih dahulu di menu <span class="text-blue"><a href="{{route ('berkas') }}">Pengajuan Kamar</a></span></h1>
    </div>
  @else
    <div class="lg:flex gap-4">
      @foreach ($data as $item)
        @if($item->kamar_id)
          <div class="bg-white text-gray-dark text-sm font-Inter p-4 w-full lg:w-3/4 rounded-md mt-4 shadow-md">
            <div class="p-8 rounded-md">
              <div class="mt-4">
                <h1 class="text-2xl font-bold">{{$item->kamar->nama}}</h1>
              </div>

              <div class="mt-3">
                <div>
                  <h1 class="text-sm mt-2 font-poppins text-gray-dark">Kapasitas</h1>
                  <div class="field">{{$item->kamar->kapasitas}} Orang</div>
                </div>

                <div>
                  <h1 class="text-sm mt-2 font-poppins text-gray-dark">Gedung</h1>
                  <div class="field">{{$item->kamar->gedung->nama}}</div>
                </div>
                <div>
                  <h1 class="text-sm mt-2 font-poppins text-gray-dark">Kategori</h1>
                  <div class="field">{{$item->kamar->gedung->kategori_gedung}}</div>
                </div>

                <div>
                  <h1 class="text-sm mt-2 font-poppins text-gray-dark">Harga</h1>
                  <div class="field">{{$item->formatRupiah('harga')}} / Tahun</div>
                </div>

                <div>
                  <div class="mt-6 mb-3">
                    <a class="px-4 py-3 hover:bg-purple hover:text-white transition-all rounded-md bg-blue text-purple bg-opacity-10" href="{{route('view_pdf')}}"><i class="bi bi-download mr-2"></i>Download Struk</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-white text-gray-dark text-sm font-Inter p-12 w-full lg:w-1/4 rounded-md mt-4 shadow-md">
            <h1 class="font-poppins font-semibold text-lg">Tanggal Menginap</h1>

            <div class="mt-12 w-full text-abu">
              <label class="text-gray-dark" for>Masa Sewa</label>
              <div class="field mt-2">{{ $item->durasi }}</div>
            </div>

            <div class="mt-6 w-full text-abu">
              <label class="text-green" for>Tanggal Masuk</label>
              <div class="field mt-2">{{ date('d F Y', strtotime($item->tanggal_masuk)) }}</div>
            </div>

            <div class="mt-6 w-full text-abu">
              <label class="text-red" for>Tanggal Keluar</label>
              <div class="field mt-2">{{ date('d F Y', strtotime($item->tanggal_keluar)) }}</div>
            </div>
          </div>
        @else
          <div class="bg-white text-gray-dark text-sm font-Inter p-4 w-full rounded-md mt-4 shadow-md">
            <h1 class="text-2xl font-bold">Kamar belum tersedia</h1>
          </div>
        @endif
      @endforeach
    </div>
  @endif
</div>
@endsection
