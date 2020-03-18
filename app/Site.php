<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = "site";
    protected $primaryKey = 'site_id';

    protected $fillable = ['slug','site_name','site_status','created_by','created_date'];
}

// class Site extends Eloquent {
//     public function ruangtraining()
//     {
//         return $this->hasMany('Ruangtraining');
//     }
// }