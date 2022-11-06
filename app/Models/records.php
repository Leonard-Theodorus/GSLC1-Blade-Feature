<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class records
{
    protected static $data = [
        [
            "record_title" => "Januari 2022",
            "income" => 500000,
            "expense" => 300000,
            "summary" => ""
        ],
        [
            "record_title" => "Februari 2022",
            "income" => 300000,
            "expense" => 700000,
            "summary" => ""
        ]

    ];
    public static function all(){
        return self::$data;
    }

}
