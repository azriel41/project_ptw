<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Purchasing extends Controller
{
    public function invoice()
    {
        return view('purchasing/invoice');
    }
    public function item()
    {
        return view('master/user/item');
    }
    public function supplier()
    {
        return view('purchasing/supplier');
    }
}
