<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\berkas;
use App\Models\users;
use App\Models\gedung;
use App\Models\kamar;
use App\Models\Riwayat;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function detail($id, Request $request)
    {
        $data = Riwayat::find($id);
        return view('/user/detail_user', compact('data'))->with('i', ($request->input('page', 1) - 1));
    }

    function user(Request $request)
    {
    if ($request->has('search')) {
        $data = Riwayat::whereHas('user', function ($query) use ($request) {
            $query->where('nim', 'LIKE', '%' . $request->search . '%');
        })->get();

        
    } else {
        $data = Riwayat::orderBy('id', 'desc')->get();
    }

    return view('/user/manage_user', compact('data'))->with('i', ($request->input('page', 1) - 1));
    }
}
