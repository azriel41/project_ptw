<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = "departemen";
    protected $primaryKey = 'departemen_id';

    protected $fillable = ['kode', 'nama','created_by','created_date'];
}
