<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangtraining extends Model
{
    protected $table = "ruangtraining";
    protected $primaryKey = 'ruangtraining_id';

    protected $fillable = 
    [
    	'ruangtraining_name',
    	'ruangtraining_kapasitas',
    	'ruangtraining_site',
    	'ruangtraining_status',
    	'created_by',
    	'created_date'];
    

    public function Pelatihantrainer(){
      return $this->hasMany('App\Pelatihantrainer', 'pelatihantrainer_ruangtraining', 'ruangtraining_id');
    } 

}

