<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Downtime;

class DowntimeController extends Controller
{
    public function index()
    {
        return view('produksi.downtime.index');
    }

    public function create()
    {
       $item = Item::all()->where('tipe','3');

       return view('produksi.downtime.tambah', compact('item'));
    }

    public function store(Request $request)
    {       
        $request->validate([
            'item_id' => 'required',
            'durasi' => 'required',
            'keterangan' => 'required'
        ]);

        $downtime = Downtime::create($request->all());

        return redirect('/downtime')->with('info', 'Data berhasil ditambah!');
    }

    public function edit(Downtime $downtime)
    {
        return view('produksi.downtime.edit', compact('downtime'));
    }

    public function update(Request $request, Downtime $downtime)
   {
        $request->validate([
            'durasi' => 'required',
            'keterangan' => 'required'
        ]);

        Downtime::where('id', $downtime->id)
        -> update([
            'durasi' => $request->durasi,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/downtime')->with('info', 'Data berhasil diedit!');  
    }

    public function getdatadowntime()
    {
        $downtime = Downtime::select('downtime.*');
        
        return \DataTables::eloquent($downtime)
        ->addColumn('no_mesin', function($dtm){
            $no = $dtm->item->kode;
            return $no;
        })
        ->addColumn('nama_mesin', function($dtm){
            $nama = $dtm->item->nama;
            return $nama;
        })
        ->addColumn('gambar', function($dtm){
            $nama = $dtm->item->getGambarItem();
            return $nama;
        })
        ->addColumn('aksi', function($dtm){
                return '<a href="downtime/'.$dtm->id.'/edit" class="btn btn-info">Edit</a>
                        <a href="downtime/'.$dtm->id.'/hapus" class="btn btn-danger delete" data-url="'.url('/downtime/'.$dtm->id).'" data-toggle="modal" data-target="#deleteModal">Hapus</a>';
        })
        ->rawColumns(['no_mesin','nama_mesin','gambar','aksi'])
        ->toJson();
    }
}
