<?php

namespace App\Models;

class Beranda
{
    private static $kegiatan = [
        [
            "title" => "Gotong Royong",
            "slug" => "gotong-royong",
            "tanggal" => "Minggu, 29 Oktober 2023",
            "mulai" => "09:00",
            "selesai" => "11:00",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dolorem, autem excepturi tempora quod dolore necessitatibus expedita reiciendis, consectetur voluptatem laboriosam, voluptate quasi sunt veritatis. Hic, aliquid quod. Esse, inventore.",

        ],

        [
            "title" => "Maulid",
            "slug" => "maulid",
            "tanggal" => "Minggu, 12 Oktober 2023",
            "mulai" => "09:00",
            "selesai" => "11:00",
            "deskripsi" => "dashgdhagfhgjashgjfhgajhsgjhgjhcjhashvfjawjyavdjhehvrjhavjhvfhdbjaiuhviuydtiaufiuaggdfkgaksgfkjaskjgfjasfasfaghhgda",
        ],

        [
            "title" => "Makan Besar",
            "slug" => "makan_besar",
            "tanggal" => "Minggu, 30 Oktober 2023",
            "mulai" => "09:00",
            "selesai" => "11:00",
            "deskripsi" => "dashgdhagfhgjashgjfhgajhsgjhgjhcjhashvfjawjyavdjhehvrjhavjhvfhdbjaiuhviuydtiaufiuaggdfkgaksgfkjaskjgfjasfasfaghhgda",
        ],

        [
            "title" => "Lomba Tahfidz",
            "slug" => "lomba-tahfidz",
            "tanggal" => "Minggu, 30 Oktober 2023",
            "mulai" => "09:00",
            "selesai" => "11:00",
            "deskripsi" => "dashgdhagfhgjashgjfhgajhsgjhgjhcjhashvfjawjyavdjhehvrjhavjhvfhdbjaiuhviuydtiaufiuaggdfkgaksgfkjaskjgfjasfasfaghhgda",
        ],

        

    ];

    public static function all()
    {
        return collect(self::$kegiatan);
    }

    public static function find($slug)
    {
        $Beranda = static::all();
        return $Beranda->firstwhere('slug', $slug);
    }
}
