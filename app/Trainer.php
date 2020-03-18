<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = "trainer";
    protected $primaryKey = 'trainer_id';

    protected $fillable = [
        'trainer_category',
    	'trainer_name',
    	'trainer_pelatihan',
    	'trainer_status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    //     'pelatihan_site',
    //     'pelatihan_direktorat',
    //     'pelatihan_departemen',
    //     'pelatihan_unit',
    //     'pelatihan_maks_register',
    //     'pelatihan_start_date',
    //     'pelatihan_end_date',
    //     'pelatihan_waktu',
    //     'pelatihan_end_time',
    //     'pelatihan_created_at',
    //     'pelatihan_created_by',
    //     'pelatihan_kapasitas',
    //     'pelatihan_status',
    //     'updated_at',
    //     'created_at',
    //     'pelatihan_username',
    ];
}


