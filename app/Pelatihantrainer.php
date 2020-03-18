<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihantrainer extends Model
{
    protected $table = "pelatihantrainer";
    protected $primaryKey = 'pelatihantrainer_id';

    protected $fillable = [
    	'pelatihantrainer_name',
    	'pelatihantrainer_deskripsi',
        'pelatihantrainer_peserta',
    	'pelatihantrainer_ruangtraining',
    	'pelatihantrainer_category',
    	'pelatihantrainer_namatrainer',
    	'pelatihantrainer_status',
    	'created_by',
    	'updated_by',
    	'created_at',
        'updated_at'];


    public function Ruangtraining(){
          return $this->belongsTo('App\Ruangtraining', 'pelatihantrainer_ruangtraining', 'ruangtraining_id');
    }


}

