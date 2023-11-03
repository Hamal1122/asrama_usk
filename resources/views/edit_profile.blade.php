@extends('Layout.main')

@section('title')
<div class="col-span-12 lg:col-span-10 w-full px-4">
    <div class="bg-white py-2 rounded-md px-4 text-sm font-poppins text-blue flex gap-4">
        <a href="{{route ('profile') }}" class="bi bi-arrow-left-short"></a>
        <h3>Edit Profile</h3>
    </div>

    <div class="bg-white px-4 py-4 mt-4 rounded-md">

        <div class="mt-4 font-poppins text-sm w-1/2 text-gray-dark gap-4">
            <label for="notelpon"> Foto Profile</label>
            <input type="image" src="https://akcdn.detik.net.id/community/media/visual/2022/12/31/cristiano-ronaldo-4.jpeg?w=700&q=90" alt="" class="field">
            <form action="" method="">
                <button type="submit" class="button  px-4 w-fit ">Upload</button>
            </form>
        </div>

        <div class="mt-4 font-poppins text-sm w-full md:w-1/2 text-gray-dark gap-4">
            <label for="username">Nama</label>
            <input type="text" id="username" class="field placeholder-gray-dark" alt="nama" placeholder="Bang dodo" />
        </div>

        <div class="mt-4 font-poppins text-sm w-full md:w-1/2 text-gray-dark gap-4">
            <label for="notelpon">No.Telpon</label>
            <input type="number" name="notelpon" id="" class="field placeholder-gray-dark" placeholder="082292389762">
            </input>

            <div class="mt-4 font-poppins text-sm  text-gray-dark gap-4">
                <label for="notelpon">Program Studi</label>
                <div class="field text-abu">Informatika</div>
            </div>

            <div class="mt-4 font-poppins text-sm  text-gray-dark gap-4">
                <label for="notelpon">Email</label>
                <div class="field text-abu">andi@gmail.com</div>
            </div>

            <div class="mt-4 font-poppins text-sm  text-gray-dark gap-4">
                <label for="notelpon">Gender</label>
                <div class="field text-abu">Laki-laki</div>
            </div>
            <form action="Simpan" method="">
                <button type="submit" class="button w-full px-4 mt-4 ">Simpan </button>
            </form>
        </div>
        @endsection