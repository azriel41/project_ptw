<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihanpeserta extends Model
{
    protected $table = "pelatihanpeserta";
    protected $primaryKey = 'pelatihanpeserta_id';

    protected $fillable =
    [
        'pelatihanpeserta_name',
        'pelatihanpeserta_deskripsi',
        'pelatihanpeserta_namatrainer',
        'pelatihanpeserta_jumlahpeserta',
        'pelatihanpeserta_type',
        'pelatihanpeserta_startdate',
        'pelatihanpeserta_enddate',
        'pelatihanpeserta_endtime',
        'pelatihanpeserta_ruangtraining',
        'pelatihanpeserta_starttime',
        'pelatihanpeserta_maksregister',
        'pelatihanpeserta_status',
        'updated_at',
        'created_at',
        'created_by',
        'updated_by'
    	
    ];

        // public function setPelatihanpesertaMaksRegisterAttribute($value)
        // {
        //     $this->attributes['pelatihanpeserta_maks_register'] = Carbon\Carbon::createFromFormat('d-m-Y H:i',$value);
        // }

        // public function setPelatihanpesertaStartDateAttribute($value)
        // {
        //     $this->attributes['pelatihanpeserta_start_date'] = Carbon\Carbon::createFromFormat('d-m-Y H:i',$value);
        // }

        // public function setPelatihanpesertaEndDateAttribute($value)
        // {
        //     $this->attributes['pelatihanpeserta_end_date'] = Carbon\Carbon::createFromFormat('d-m-Y H:i',$value);
        // }
}
