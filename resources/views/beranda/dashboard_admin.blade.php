@extends('Layout.admin') @section('layout')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin | AsramaUSK</title>
   <style>
    <link href="/dist/tailwind.css" rel="stylesheet" /><link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
  </style>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script src="echarts.js"></script>
</head>

</head>

<div class="col-span-12 lg:col-span-10 w-full px-4">
    <div class="font-semibold text-2xl text-gray-dark mb-4">
        <h1>
            Beranda Admin
        </h1>
    </div>
    <div class="bg-white py-8 rounded-2xl font-poppins text-gray-dark flex gap-8 justify-center shadow-md">

        <div class="bg-blue text-white py-6 px-6 w-48 rounded-2xl">
            <div class="text-5xl">
                <h1>{{ $jumlah_gedung }}</h1>
            </div>
            <div class="text-xs">
                <h1>Total Gedung</h1>
            </div>
        </div>
        <div class="bg-midnight text-white py-6 px-6 w-48 rounded-2xl">
            <div class="text-5xl">
                <h1>{{ $jumlah_kamar }}</h1>
            </div>
            <div class="text-xs">
                <h1>Total Kamar</h1>
            </div>
        </div>
        <div class="bg-tahiti text-white py-6 px-6 w-48 rounded-2xl">
            <div class="text-5xl">
                <h1>{{ $jumlah_pengguna }}</h1>
            </div>
            <div class="text-xs">
                <h1>Total Pengguna</h1>
            </div>
        </div>
        <div class="bg-bluehover text-white py-6 px-6 w-48 rounded-2xl">
            <div class="text-5xl">
                <h1>{{$jumlah_pengguna_aktif }}</h1>
            </div>
            <div class="text-xs">
                <h1>Pengguna Aktif</h1>
            </div>
        </div>
        <div class="bg-purple text-white py-8 px-6 w-48 rounded-2xl">
            <div class="text-5xl">
                <h1>{{$jumlah_postingan }}</h1>
            </div>
            <div class="text-xs">
                <h1>Jumlah Postingan</h1>
            </div>
        </div>

    </div>


<div class="flex gap-4">
  <div class="w-full">
    <div class="bg-white px-4 py-8 mt-4 w-full rounded-2xl shadow-md ">
        <h1 class="text-center  text-base text-gray-dark font-semibold">Jumlah Pengguna</h1>
        <h3 class="text-center mb-4 text-xs">Berdasarkan Kategori Pengguna</h3>
        <canvas id="myChart"  width="100" height="50"></canvas>
    </div>
    <div class="bg-white px-4 py-8 mt-4 w-full rounded-2xl shadow-md ">
      <h1 class="text-center text-base text-gray-dark ">Total Pendapatan</h1>
      <h3 class="text-center mb-4 text-xs">Pertahun</h3>
      <canvas id="transaksiChart"  width="100" height="30"></canvas>
    </div>
  </div>


    <div class="mt-4 bg-white p-4 rounded-2xl shadow-md w-1/3 ">
      <div class="justify-between flex mt-4 px-4 ">
          <h1 class="text-gray-dark font-semibold ">Transaksi terakhir</h1>
          <a href="/manage_keuangan"><i class="bi bi-three-dots text-base"></i></a>
      </div>
      
      <div class="">
        @foreach ($lasttransaction as $data)
        <li class="justify-between shadow-lg flex mt-5 rounded-lg py-6 px-2 ">
            <div class="gap-2 flex-col" >
              <div class=" text-gray-dark px-6  text-left text-xs font-normal ">{{$data->user->name}}</div>
              <div class="flex items-center gap-2 px-4 mt">
                <i class="bi bi-graph-up-arrow text-green text-xs bg-green bg-opacity-10 p-1 rounded-md"></i>
                <div class=" text-gray-dark text-left font-light text-xs "><span class="text-green">{{$data->formatRupiah('harga')}}</span></div>
            </div>
            </div>
              <div class="   text-gray-dark text-left font-light">
                <h3 class=" bg-blue  bg-opacity-10 text-blue text-center px-2 rounded-full text-[10px] font-poppins">{{ $data->created_at->diffForHumans() }}</h3>
              </div>
            @endforeach
       </li>
      </div>

      
</div>
</div>












<script>
  const atx = document.getElementById('myChart');

  new Chart(atx, {
    type: 'bar',
    data: {
      labels: ['KIPK', 'Reguler', 'Internasional'],
      datasets: [{
        label: 'Tampilkan data',
        data: [ {{ $jumlah_kipk}}, {{ $jumlah_reguler }},{{ $jumlah_internasional }}  ],
        backgroundColor: [
        'rgb(0,250,154)',
        'rgb(65,105,225)',
        'rgb(255,255,0)',
      
    ],
    borderColor: [
        'rgb(0,250,154)',
        'rgb(65,105,225)',
        'rgb(255,255,0)',
    ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            display: true // Hide the labels on the y-axis
          }
        },
        x: {
          ticks: {
            display: true // Hide the labels on the x-axis
          }
        }
      },
      plugins: {
        legend: {
          display: false // Hide the dataset labels in the legend
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
                  label: 'Tampilkan data',
                  data: data,
                  fill: false,
                  borderColor: 'rgb(65,105,225)',
                  tension: 0.1
              }]
          },
          options: {
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            display: true // Hide the labels on the y-axis
          }
        },
        x: {
          ticks: {
            display: true // Hide the labels on the x-axis
          }
        }
      },
      plugins: {
        legend: {
          display: false // Hide the dataset labels in the legend
        }
      }
    }
          
      });
  });


  
</script>

<script>
var dom = document.getElementById('transaksiUang');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    type: 'category',
    boundaryGap: false,
    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [820, 932, 901, 934, 1290, 1330, 1320],
      type: 'line',
      areaStyle: {}
    }
  ]
};


if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);
</script>

    @endsection
</div>