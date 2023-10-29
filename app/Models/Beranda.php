<?php

namespace App\Models;

class Beranda 
{
 private static $kegiatan = [
    [
        "title" => "Gotong Royong",
        "slug" => "Kegiatan Pertama",
        "mulai" => "09:00",
        "selesai" => "11:00",
        "deskripsi" => "dashgdhagfhgjashgjfhgajhsgjhgjhcjhashvfjawjyavdjhehvrjhavjhvfhdbjaiuhviuydtiaufiuaggdfkgaksgfkjaskjgfjasfasfaghhgda",
        
    ],

    [
        "title" => "Maulid",
        "slug" => "Kegiatan Pertama",
        "mulai" => "09:00",
        "selesai" => "11:00",
        "deskripsi" => "dashgdhagfhgjashgjfhgajhsgjhgjhcjhashvfjawjyavdjhehvrjhavjhvfhdbjaiuhviuydtiaufiuaggdfkgaksgfkjaskjgfjasfasfaghhgda",
    ],

];

public static function all()
{
    return self::$kegiatan;
}

public static function find($slug)
{
    $kegiatan = static::all();
    return $kegiatan->firstWhere('slug', $slug);
}

}
