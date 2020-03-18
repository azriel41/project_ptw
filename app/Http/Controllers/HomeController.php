<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Alert;session()->flash('message', 'your message');

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // session()->flash('message', 'your message');
        // Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');
        return view('home');
    }
}
