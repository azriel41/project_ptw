<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downtime extends Model
{
    protected $table = 'downtime';
    protected $fillable = ['item_id','durasi','keterangan'];

    public function item(){
        return $this->belongsTo('App\Item');
    }
}
