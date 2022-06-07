<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return View('index', Home::index());
    }

    public function login()
    {
        return View('login', Home::login());
    }
}
