<?php

namespace App\Http\Controllers;

use App\Trainer;
use Illuminate\Http\Request;
use DB;
use App\models;
use Yajra\Datatables\Datatables;
use Auth;

class TrainerController extends Controller
{

    protected $model;
    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    public function datatable()
    {
         $data = $this->model->Pelatihantrainer()
                                ->with('ruangtraining')
                                ->where('pelatihantrainer_namatrainer',Auth::user()->fullname)
                                ->get();
        $data = collect($data);
        return Datatables::of($data)
          ->addColumn('status', function($data) {
            if ($data->pelatihantrainer_status == 1) {
                $status = 'AKTIF';
            }else{
                $status = 'TIDAK AKTIF';
            }
            return $status;     
          })
          ->addIndexColumn()
          ->toJson();
    }

    public function index()
    {
        return view('master.trainer.index');
    }


}
