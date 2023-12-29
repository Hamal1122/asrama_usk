@extends('Layout.admin') @section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
    <div class="font-semibold text-2xl text-gray-dark mb-4">
        <h1>
            Dashboard Admin
        </h1>
    </div>
    <div class="bg-white p-4 rounded-md font-poppins text-gray-dark flex gap-8 justify-center">

        <div class="bg-blue text-white py-6 px-6 w-48 rounded-md">
            <div class="text-2xl">
                <h1>{{ $jumlah_gedung }}</h1>
            </div>
            <div class="text-xs">
                <h1>Total Gedung</h1>
            </div>
        </div>
        <div class="bg-midnight text-white py-6 px-6 w-48 rounded-md">
            <div class="text-2xl">
                <h1>{{ $jumlah_kamar }}</h1>
            </div>
            <div class="text-xs">
                <h1>Total Kamar</h1>
            </div>
        </div>
        <div class="bg-tahiti text-white py-6 px-6 w-48 rounded-md">
            <div class="text-2xl">
                <h1>{{ $jumlah_pengguna }}</h1>
            </div>
            <div class="text-xs">
                <h1>Total Pengguna</h1>
            </div>
        </div>
        <div class="bg-bluehover text-white py-6 px-6 w-48 rounded-md">
            <div class="text-2xl">
                <h1>{{$jumlah_pengguna_aktif }}</h1>
            </div>
            <div class="text-xs">
                <h1>Pengguna Aktif</h1>
            </div>
        </div>
        <div class="bg-purple text-white py-6 px-6 w-48 rounded-md">
            <div class="text-2xl">
                <h1>{{$jumlah_postingan }}</h1>
            </div>
            <div class="text-xs">
                <h1>Jumlah Postingan</h1>
            </div>
        </div>

    </div>
    

    <div class="container mx-auto py-4 rounded-md font-poppins">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6 px-6 py-4 rounded-md gap-2 flex-col flex text-gray-dark w-full h-96 bg-white">
                <div class="flex justify-between">
                    <div>
                        <h1 class="font-poppins">Pengguna Aktif</h1>
                    </div>
                    <a href="{{ route('manage_user') }}" class="py-1 text-blue mb-4 hover:bg-blue hover:bg-opacity-10 hover:rounded-full px-2 transition-all">More</a>
                </div>
                @foreach ($pengguna_aktif as $data)
                @if($data->status == 1)
                <div class="flex bg-bermuda justify-between px-6 py-4 rounded-lg font-light text-sm">
                    <h1>{{ $data -> user -> name }}</h1>
                    <h1 class="text-green rounded-full">
                        {{ $data -> user->nim }}
                    </h1>
                    <h1>{{ $data ->berkas->kategori }}</h1>
                </div>
                @endif
                @endforeach
            </div>  

            <!-- Form Pengajuan Kamar -->
            <div class="col-span-6">
                <div class="col-span-6 px-6 py-4 rounded-md gap-2 flex-col flex text-gray-dark w-full h-96 bg-white">
                    <div class="flex justify-between">
                        <div>
                            <h1 class="">Belum Diverifikasi</h1>
                            <h3 class="text-xs text-green font-light">
                                Data Pengajuan Kamar
                            </h3>
                        </div>
                        <a
                            href="{{ route('manage_berkas') }}"
                            class="py-1 text-blue mb-4 hover:bg-blue hover:bg-opacity-10 hover:rounded-full px-2 transition-all"
                            >More</a>
                    </div>
                    @foreach ($unverified as $data)
                     @if($data->status == 0)
                    <div class="flex bg-bermuda justify-between px-6 py-4 rounded-lg">
                        <h1>{{$data->user->name}}</h1>
                        <h1  class="text-green">{{$data->user->nim}}</h1>
                        <h1 class="text-blue">{{$data->kategori}}</h1>
                    </div>
                    @endif 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
