<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['kode','nama','gambar','stok'];

    public function getGambarProduk(){
        if(!$this->gambar){
            return 'Belum Upload Gambar';
        }
        return '<img src ="'.asset('Gambar Produk/'.$this->gambar).'" height="150px" width="150px">';
    }
}
