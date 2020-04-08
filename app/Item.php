<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable = ['kode','nama','gambar','stok','tipe'];

    public function getGambarItem(){
        if(!$this->gambar){
            return 'Belum Upload Gambar';
        }
        return asset('assets/images/item/'.$this->gambar);
    }
}
