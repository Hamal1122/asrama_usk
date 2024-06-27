<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Riwayat;
use Illuminate\Contracts\View\View;

class ExportTransaksi implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $data = riwayat::orderBy('id', 'desc')->get();
        return view('tabel.transaksiTabel',['data'=>$data] );
    }
}
