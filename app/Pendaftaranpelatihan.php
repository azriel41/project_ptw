<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaranpelatihan extends Model
{
    protected $table = "pendaftaranpelatihan";
    protected $primaryKey = 'pendaftaranpelatihan_id';

    protected $fillable = [
    	'pendaftaranpelatihan_name',
    	'pendaftaranpelatihan_deskripsi',
    	'pendaftaranpelatihan_peserta',
    	'pendaftaranpelatihan_category',
    	'pendaftaranpelatihan_namatrainer',
    	'pendaftaranpelatihan_status',
    	'created_by',
    	'updated_by',
    	'created_date'];
}
