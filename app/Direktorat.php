<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direktorat extends Model
{
    protected $table = "direktorat";
    protected $primaryKey = 'id';

    protected $fillable = ['direktorat_name','direktorat_status','created_by','created_date'];
}
