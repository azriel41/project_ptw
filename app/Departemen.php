<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = "departemen";
    protected $primaryKey = 'departemen_id';

    protected $fillable = ['departemen_name','departemen_status','created_by','created_date'];
}
