@extends('Layout.admin') @section('layout')
<div class="col-span-12 lg:col-span-10 w-full px-4">
 

    <div class="container mx-auto py-4 rounded-md">
        <div class="grid grid-cols-12 gap-4">
            <div
                class="col-span-6 px-6 py-4 rounded-md gap-2 flex-col flex text-gray-dark w-full h-96 bg-white"
            >
                <div class="flex justify-between">
                    <div>
                        <h1 class="">Data Gedung</h1>
                        <h3 class="text-xs text-green font-light">
                            terakhir ditambahkan
                        </h3>
                    </div>
                    <a
                        href="{{ route('manage_kamar') }}"
                        class="py-1 text-blue mb-4 hover:bg-blue hover:bg-opacity-10 hover:rounded-full px-2 transition-all"
                        >More</a
                    >
                </div>
                @foreach ($lastpost as $lastpost)
                <div
                    class="flex bg-bermuda justify-between px-6 py-4 rounded-lg font-light text-sm"
                >
                    <h1>{{ $lastpost -> nama }}</h1>
                    <h1 class="text-green rounded-full">
                        {{ $lastpost -> kategori_gedung }}
                    </h1>
                    <h1>{{ $lastpost -> updated_at->format('d, M Y H:i') }}</h1>
                </div>
                @endforeach
            </div>  

            <!-- Form Pengajuan Kamar -->
            <div class="col-span-6">
                <div
                    class="col-span-6 px-6 py-4 rounded-md gap-2 flex-col flex text-gray-dark w-full h-96 bg-white"
                >
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
                    @foreach ($data as $berkas) @if($berkas->status == 0)
                    <div class="flex bg-bermuda justify-between px-6 py-4 rounded-lg">
                        <h1>{{$berkas->user->name}}</h1>
                        <h1  class="text-green">{{$berkas->user->nim}}</h1>
                        <h1 class="text-blue">{{$berkas->kategori}}</h1>
                    </div>
                    @endif @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
