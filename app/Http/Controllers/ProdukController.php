<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        return view('master.produk.index');
    }

    public function create(Request $request)
    {
       return view('master.produk.tambah');
    }

    public function store(Request $request)
    {       
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'stok' => 'required',
            'gambar' => 'mimes:jpeg,png'
        ]);

        $produk = Produk::create($request->all());

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('Gambar Produk/', $request->file('gambar')->getClientOriginalName());
            $produk->gambar = $request->file('gambar')->getClientOriginalName();
            $produk->save();
        }

        return redirect('/produk')->with('info', 'Data berhasil ditambah!');
    }

    public function edit(Produk $produk)
    {
        return view('master.produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'mimes:jpeg,png'
        ]);

        Produk::where('id', $produk->id)
        -> update([
            'nama' => $request->nama
        ]);


        if($request->hasFile('gambar')){
            $request->file('gambar')->move('Gambar Produk/', $request->file('gambar')->getClientOriginalName());
            $produk->gambar = $request->file('gambar')->getClientOriginalName();
            $produk->save();
        }

        return redirect('/produk')->with('info', 'Data berhasil diedit!');  
    }

    public function destroy(Produk $produk)
    {
            Produk::destroy($produk->id);

        return redirect('/produk')->with('info', 'Data berhasil dihapus!');
    }

    public function getdataproduk()
    {
        $produk = Produk::select('produk.*');
        
        return \DataTables::eloquent($produk)
        ->addColumn('gambarr', function($pdk){
            return $pdk->getGambarProduk(); 
        })
        ->addColumn('aksi', function($pdk){
                return '<a href="produk/'.$pdk->id.'/edit" class="btn btn-info">Edit</a>
                        <a href="produk/'.$pdk->id.'/hapus" class="btn btn-danger delete" data-url="'.url('/produk/'.$pdk->id).'" data-toggle="modal" data-target="#deleteModal">Hapus</a>';
        })
        ->rawColumns(['gambarr','aksi'])
        ->toJson();
    }
}
