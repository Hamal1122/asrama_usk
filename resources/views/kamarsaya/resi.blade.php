<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembayaran</title>

    <style>
        body {      
            font-family: Arial, sans-serif;
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
        h1 {
            font-size: 24px;
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
            font-size: 14px;
            text-align: left;;
        }
        ul {
            padding: 0;
            list-style-type: none;
        }
        li {
            margin-bottom: 8px;
            padding: 8px;
            background-color: #f9f9f9;
            /* border-left: 3px solid #646464; */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Struk Pembayaran</h1>
        <h2>Asrama Universitas Syiah Kuala</h2>
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
                <h4>Total Harga</h4>
                <li>{{$item->kamar->formatRupiah('harga')}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
