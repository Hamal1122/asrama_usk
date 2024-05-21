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


<div class="flex gap-4">
    <div class="bg-white px-4 py-8 mt-4 w-1/2 rounded-md ">
        <h1 class="text-center  text-base text-gray-dark">Jumlah Pengguna</h1>
        <h3 class="text-center mb-4 text-xs">Berdasarkan Kategori</h3>
        <canvas id="myChart"  width="50" height="40"></canvas>
    </div>

    <div class="bg-white px-4 py-8 mt-4 w-1/2 rounded-md ">
        <h1 class="text-center text-base text-gray-dark ">Jumlah Gedung</h1>
        <h3 class="text-center mb-4 text-xs">Berdasarkan Kategori</h3>
        <canvas id="gedungChart"  width="50" height="40"></canvas>
    </div>
</div>

<div class="bg-white px-4 py-8 mt-4 w-full rounded-md ">
  <h1 class="text-center text-base text-gray-dark ">Total Trasaksi</h1>
  <h3 class="text-center mb-4 text-xs">Pertahun</h3>
  <canvas id="transaksiChart"  width="100" height="30"></canvas>
</div>



<div class="bg-white p-4 mt-4 rounded-md ">
    <div class="flex justify-between">
        <h1 class="text-left  text-base text-gray-dark">Transaksi terakhir</h1>
        <a href="{{route ('manage_keuangan') }}" class="text-center mb-4 text-xs">Selengkapnya</a>
    </div>
    <div class=" overflow-x-auto mt-6">
        <table class="table-auto font-semibold text-sm overflow-x-auto w-full ">
          <thead class="rounded-md">
            <tr class="font-poppins text-xs">
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left ">No</th>
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left "> Tanggal</th>
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left ">Nama </th>
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left "> NIM</th>
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left "> Kategori</th>
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left "> Jenis Kamar</th>
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left "> Durasi</th>
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left "> Harga</th>
              <th class="bg-gray-dark bg-opacity-10  text-darkbg-gray-dark px-6 py-2 tracking-wide text-left "> Status Pembayaran</th>
      
            </tr>
          </thead>
      
          <tbody>
            @foreach ($lasttransaction as $data)
            <tr class="font-poppins text-xs">
              <td class="bg-white border-b-silver border-b-4  text-gray-dark px-6 py-4  text-left font-light">{{ ++$i }}</td>
              <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{ date('d F Y', strtotime($data->created_at)) }}</span></td>
              <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->berkas->user->name}}</td>
              <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light whitespace-nowrap">{{$data->berkas->user->nim}}</td>
              <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light whitespace-nowrap"><span class="text-abu">{{$data->berkas->kategori}}</span></td>
              <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{$data->berkas->jeniskamar}}</span></td>
              <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light"><span class="text-abu">{{$data->berkas->durasi}}</span></td>
              <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-2 tracking-wide text-left font-light whitespace-nowrap"><span class="text-abu">{{$data->berkas->formatRupiah('harga')}}</span></td>
              <td class="bg-white border-b-silver border-b-4 text-gray-dark px-6 py-4 tracking-wide text-left font-light mr-6">
                @if($data->status == 0)
                <h3 class="mt-2 bg-abu  bg-opacity-10 text-abu px-2 py-1 text-center rounded-full text-xs font-extralight">menunggu</h3>
                @elseif($data->status == 1)
                <h3 class="mt-2 bg-green  bg-opacity-10 text-green text-center px-2 py-1 rounded-full text-xs font-poppins">Berhasil</h3>
                @endif
              </td>
            </tr>
            @endforeach
      
          </tbody>
        </table>
      </div>
</div>







<script>
  const atx = document.getElementById('myChart');

  new Chart(atx, {
    type: 'bar',
    data: {
      labels: ['KIPK', 'Reguler', 'Internasional'],
      datasets: [{
        label: 'Jumlah Pengguna',
        data: [ {{ $jumlah_kipk}}, {{ $jumlah_reguler }},{{ $jumlah_internasional }}  ],
        backgroundColor: [
        'rgb(255, 99, 132)',
      'rgb(75, 192, 192)',
      'rgb(255, 205, 86)',
      'rgb(201, 203, 207)',
      'rgb(54, 162, 235)'
    ],

    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script>
    const ctx = document.getElementById('gedungChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Laki - Laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah Gedung',
          data: [ {{ $jumlah_gedunglk}}, {{ $jumlah_gedungpr }}],
          backgroundColor: [
          'rgb(255, 99, 132)',
        'rgb(75, 192, 192)',
        'rgb(255, 205, 86)',
        'rgb(201, 203, 207)',
        'rgb(54, 162, 235)'
      ],
  
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Get the data from Laravel
      var chartData = @json($chart);

      // Parse the data and prepare labels and data for Chart.js
      var labels = chartData.map(item => `${item.year}-${('0' + item.month).slice(-2)}`);
      var data = chartData.map(item => item.count);

      // Get the context of the canvas element we want to select
      var xtx = document.getElementById('transaksiChart').getContext('2d');

      // Create the chart
      var transaksiChart = new Chart(xtx, {
          type: 'line',
          data: {
              labels: labels,
              datasets: [{
                  label: 'Total Pendapatan',
                  data: data,
                  fill: false,
                  borderColor: 'rgb(75, 192, 192)',
                  tension: 0.1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
  });


  
</script>

    @endsection
</div>

