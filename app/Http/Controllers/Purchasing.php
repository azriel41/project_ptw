<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Purchasing extends Controller
{
    public function invoice()
    {
        return view('purchasing/invoice');
    }
    public function msupplier()
    {
        return view('master/supplier');
    }
    public function item()
    {
        return view('master/item');
    }
    public function supplier()
    {
        return view('purchasing/supplier');
    }
    public function invoiceout()
    {
        return view('purchasing/invoiceout');
    }
    public function buy()
    {
        return view('purchasing/buy');
    }
}
