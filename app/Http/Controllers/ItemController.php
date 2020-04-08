<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('master.item.index');
    }

    public function create(Request $request)
    {
       return view('master.item.tambah');
    }

    public function store(Request $request)
    {       
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'stok' => 'required',
            'tipe' => 'required',
            'gambar' => 'mimes:jpeg,png'
        ]);

        $item = Item::create($request->all());

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('assets/images/item/', $request->file('gambar')->getClientOriginalName());
            $item->gambar = $request->file('gambar')->getClientOriginalName();
            $item->save();
        }

        return redirect('/item')->with('info', 'Data berhasil ditambah!');
    }

    public function edit(Item $item)
    {
        return view('master.item.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'nama' => 'required',
            'tipe' => 'required',
            'gambar' => 'mimes:jpeg,png'
        ]);

        Item::where('id', $item->id)
        -> update([
            'nama' => $request->nama,
            'tipe' => $request->tipe
        ]);


        if($request->hasFile('gambar')){
            $request->file('gambar')->move('assets/images/item/', $request->file('gambar')->getClientOriginalName());
            $item->gambar = $request->file('gambar')->getClientOriginalName();
            $item->save();
        }

        return redirect('/item')->with('info', 'Data berhasil diedit!');  
    }

    public function destroy(Item $item)
    {
            Item::destroy($item->id);

        return redirect('/item')->with('info', 'Data berhasil dihapus!');
    }

    public function getdataitem()
    {
        $item = Item::select('item.*');
        
        return \DataTables::eloquent($item)
        ->addColumn('gambarr', function($pdk){
            return $pdk->getGambarItem(); 
        })
        ->addColumn('jenis', function($pdk){
            if($pdk->tipe == '1'){
                $pdk->tipe = 'Bahan Baku';
            } else if ($pdk->tipe == '2'){
                $pdk->tipe = 'Produk Jadi';
            } else if ($pdk->tipe == '3'){
                $pdk->tipe = 'Mesin';
            } 

            return  $pdk->tipe; 
        })
        ->addColumn('jenis', function($pdk){
            if($pdk->tipe == '1'){
                $pdk->tipe = 'Bahan Baku';
            } else if ($pdk->tipe == '2'){
                $pdk->tipe = 'Produk Jadi';
            } else if ($pdk->tipe == '3'){
                $pdk->tipe = 'Mesin';
            } 

            return  $pdk->tipe; 
        })
        ->addColumn('aksi', function($pdk){
                return '<a href="item/'.$pdk->id.'/edit" class="btn btn-info">Edit</a>
                        <a href="item/'.$pdk->id.'/hapus" class="btn btn-danger delete" data-url="'.url('/item/'.$pdk->id).'" data-toggle="modal" data-target="#deleteModal">Hapus</a>';
        })
        ->rawColumns(['jenis','gambarr','aksi'])
        ->toJson();
    }
}
