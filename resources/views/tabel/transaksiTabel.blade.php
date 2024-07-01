<table class="table-auto font-semibold text-sm overflow-x-auto w-full ">
    <thead class="rounded-md">
      <tr class="font-poppins text-xs">
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left ">No</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left ">Kode Transaksi</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left ">Tanggal</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left ">Nama </th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left "> NIM</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left "> Kategori</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left "> Jenis Kamar</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left "> Durasi</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left "> Harga</th>
        <th class="bg-white border-b-2 border-opacity-20  text-purple px-6 py-4 tracking-wide text-left "> Status Pembayaran</th>

      </tr>
    </thead>

    <tbody>
      @foreach ($data as $data => $item)
      <tr class="font-poppins text-xs">
        <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light"></td>
                <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light whitespace-nowrap"><span class="text-abu">{{$item->nomor_resi}}</span></td>
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