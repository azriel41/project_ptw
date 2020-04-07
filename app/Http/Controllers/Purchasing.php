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
    public function spp()
    {
        return view('purchasing/spp');
    }
    public function addspp()
    {
        return view('purchasing/create_spp');
    }
    public function sppout()
    {
        return view('purchasing/sppout');
    }
    public function faktur()
    {
        return view('purchasing/faktur');
    }
}
