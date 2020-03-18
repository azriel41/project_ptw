<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "unit";
    protected $primaryKey = 'unit_id';

    protected $fillable = ['unit_name','unit_status','created_by','created_date'];
}
