<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembayaran</title>

    <style>
        body {      
            font-family: monospace, sans-serif;
            line-height: 1.6;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .header img {
            position: absolute;
            left: 0;
            max-width: 50px;
            max-height: 50px;
            margin-right: 10px;
        }
        .header h1 {
            font-size: 18px;
            text-align: center;
           
        }
        h2 {
            font-size: 16px;
            text-align: center;
        }
        h3 {
            font-size: 10px;
            text-align: left;
            margin-bottom: 8px;
        }
        h4 {
            font-size: 12px;
            text-align: left;
        }
        ul {
            padding: 0;
            list-style-type: none;
        }
        li {
            margin-bottom: 8px;
            font-size: 10px;
            padding: 8px;
            background-color: #f9f9f9;
        }

        span {
            margin-bottom: 8px;
            font-size: 12px;
            padding: 8px;
            font-weight: bold;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="http://sipil.usk.ac.id/wp-content/uploads/2018/02/Logo-Unsyiah-Kuning-HD-1012x972-Transparan-1.png" width="42" height="42" alt="Logo"> <!-- Replace with the path to your logo image -->
            <h1>Struk Pembayaran</h1>
            <h2>Asrama Universitas Syiah Kuala</h2>
        </div>
        <hr>
        <ul>
            @foreach($data as $item)
                <h3>Kode pembayaran</h3>
                <li>{{$item->nomor_resi}}</li>

                <h3>Nama Kamar</h3>
                <li>{{$item->kamar->nama}}</li>

                <h3>Nama Gedung</h3>
                <li>{{$item->kamar->gedung->nama}}</li>

                <h3>Jenis Kamar</h3>
                <li>{{$item->jeniskamar}}</li>
                
                <h3>Kategori pengajuan</h3>
                <li>{{$item->kategori}}</li>

                <h3>Masa Sewa</h3>
                <li>{{$item->durasi}}</li>

                <h3>Tanggal Masuk</h3>
                <li>{{ date('d F Y', strtotime($item->tanggal_masuk)) }}</li>

                <h3>Tanggal Keluar</h3>
                <li>{{ date('d F Y', strtotime($item->tanggal_keluar)) }}</li>

                <h3>Status Pembayaran</h3>
                <li>Berhasil</li>

                <hr>
                <h4>Harga Kamar</h4>
                <li>Rp. 4.800.000</li>

                <h4>Total Harga</h4>
                <li>Rp. 4.800.000 / {{$item->kamar->kapasitas}} = <span>{{$item->kamar->formatRupiah('harga')}}</span></li>
            @endforeach
        </ul>
    </div>
</body>
</html>
