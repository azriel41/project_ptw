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
        return '<img src ="'.asset('assets/images/item/'.$this->gambar).'" height="150px" width="150px">';
    }

    public function downtime(){
        return $this->hasMany('App\Downtime');
    }
}
