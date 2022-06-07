<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    private static $dataHome = [
        "title" => "Home"
    ];

    public static function index()
    {
        return ["title" => "Home"];
    }

    public static function login()
    {
        return ["title" => "Login"];
    }
}
