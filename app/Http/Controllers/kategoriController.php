<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kategori;

class kategoriController extends Controller
{
    public function index()
    {

        return view('admin.kategori');
    }
}
