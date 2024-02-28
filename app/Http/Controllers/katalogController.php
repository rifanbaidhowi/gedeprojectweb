<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class katalogController extends Controller
{
    public function index()
    {
    return view('landing.katalog');
    }
}
