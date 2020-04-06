<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = "departemen";
    protected $primaryKey = 'id';
    protected $fillable = ['id','kode','nama','created_at', 'updated_at'];
}
