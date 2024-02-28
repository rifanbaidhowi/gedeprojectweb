<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class desainerController extends Controller
{
    public function index ()
    {
        return view('desainer.desainer');
    }

}
