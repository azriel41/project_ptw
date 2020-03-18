<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    protected $table = "waktu";
    protected $primaryKey = 'waktu_id';

    protected $fillable = ['waktu_awal','waktu_akhir','waktu_status','created_by','created_date'];
}
