<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $table = "pelatihan";
    protected $primaryKey = 'pelatihan_id';

    protected $fillable = [
    	'pelatihan_harian',
    	'pelatihan_batch',
    	'pelatihan_name',
    	'pelatihan_description',
        'pelatihan_site',
        'pelatihan_direktorat',
        'pelatihan_departemen',
        'pelatihan_unit',
        'pelatihan_maks_register',
        'pelatihan_start_date',
        'pelatihan_end_date',
        'pelatihan_waktu',
        'pelatihan_end_time',
        'pelatihan_created_at',
        'pelatihan_created_by',
        'pelatihan_kapasitas',
        'pelatihan_status',
        'updated_at',
        'created_at',
        'pelatihan_username',
    ];
}


