<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $table = "meeting";
    protected $primaryKey = 'meeting_id';

    protected $fillable =
    [
        'meeting_keperluan',
        'meeting_startdate',
        'meeting_enddate',
        'meeting_starttime',
        'meeting_endtime',
        'meeting_lokasi',
        'meeting_jumlahpeserta',
        'meeting_konsumsi',
        'meeting_aplikasi',
        'meeting_meetingkodepp',
        'meeting_pic',
        'meeting_extention',
        'created_at',
        'created_by',
    	
    ];
}
