<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
	    
    protected $table = 'karyawan';
	protected $primaryKey = 'id';
	public $remember_token = false;
	const UPDATED_AT = 'updated_at';
	const CREATED_AT = 'created_at';
	protected $fillable = ['id', 'nik', 'nama', 'jenis_kelamin' , 'tempat_lahir' , 'tanggal_lahir' , 'agama' , 'no_identitas' ,'pendidikan' ,'status_kawin' , 'image' , 'alamat' , 'status_kerja' , 'keterangan' , 'created_by', 'updated_by', 
		'created_at', 'updated_at', 'status'];
}
