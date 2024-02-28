<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer', compact('customers'));
    }

}
