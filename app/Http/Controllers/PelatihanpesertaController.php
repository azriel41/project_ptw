<?php

namespace App\Http\Controllers;

use App\Pelatihanpeserta;
use Illuminate\Http\Request;
use DB;
use App\models;
use Auth;
use App\Imports\SiswaImport;
use Excel;
class PelatihanpesertaController extends Controller
{
    
    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    
    public function index()
    {
        $pelatihanpeserta = pelatihanpeserta::all();
        return view('master.pelatihanpeserta.index',compact('pelatihanpeserta'));
    }
    
    public function create()
    {
        $pelatihantrainer = $this->model->Pelatihantrainer()->with('ruangtraining')->get();
        $trainer = DB::table('trainer')->get();
        $user = DB::table('users')->get();
        return view('master.pelatihanpeserta.create',compact('pelatihantrainer','trainer','user'));

    }
    public function excel_import(Request $req)
    {
        $data = Excel::toArray(new SiswaImport,$req->file('file_excel'));
        return Response()->json(['hasil'=>$data]);
    }
    public function store(Request $request)
    {
        return $request->all();
        // \App\Pelatihanpeserta::create(
        //     [
        //     'pelatihanpeserta_id' => $request->pelatihanpeserta_id,
        //     'pelatihanpeserta_name' => $request->pelatihanpeserta_name,
        //     'pelatihanpeserta_deskripsi' => $request->pelatihanpeserta_deskripsi,
        //     'pelatihanpeserta_namatrainer' => $request->pelatihanpeserta_namatrainer,
        //     'pelatihanpeserta_jumlahpeserta' => $request->pelatihanpeserta_jumlahpeserta,
        //     'pelatihanpeserta_type' => $request->pelatihanpeserta_type,
        //     'pelatihanpeserta_startdate'        => date('Y-m-d',strtotime($request->pelatihanpeserta_startdate)),
        //     'pelatihanpeserta_enddate'        => date('Y-m-d',strtotime($request->pelatihanpeserta_enddate)),
        //     'pelatihanpeserta_maksregister'        => date('Y-m-d',strtotime($request->pelatihanpeserta_maksregister)),
        //     'pelatihanpeserta_username' => $request->pelatihanpeserta_username,
        //     'pelatihanpeserta_status' => $request->pelatihanpeserta_status,
        //     'created_by' => $request->created_by,
        //     'updated_by' => $request->updated_by,
        // ]);

        
        return redirect()->route('pelatihanpeserta_index')
                        ->with('info_create','Pelatihan Peserta Created successfully.');
    }

    public function show(pelatihanpeserta $pelatihanpeserta,$id)
    {

      $pelatihanpeserta = pelatihanpeserta::where('pelatihanpeserta_id',$id)->first();
       
        return view('master.pelatihanpeserta.show',compact('pelatihanpeserta'));
    }

     public function edit($id)
    {
      
        $pelatihanpeserta = pelatihanpeserta::find($id);
        return view('master.pelatihanpeserta.edit',['pelatihanpeserta'=>$pelatihanpeserta]);
    }

    public function update(Request $request,$id)
    {
        // dd($pelatihanpeserta->all());
       $request->validate([
            'pelatihanpeserta_category'        => 'required',
            'pelatihanpeserta_name'            => 'required',
            'pelatihanpeserta_deskripsi'       => 'required',
            'pelatihanpeserta_maks_register'   => 'required',
            'pelatihanpeserta_start_date'      => 'required',
            'pelatihanpeserta_end_date'        => 'required',
            'pelatihanpeserta_waktu'           => 'required',
            'pelatihanpeserta_kapasitas'       => 'required',
            'pelatihanpeserta_status'          => 'required',
            'pelatihanpeserta_username'        => 'required',
            'updated_at'                       => 'required',
            'created_date'                     => 'required'
        ]);
  
        pelatihanpeserta::where('pelatihanpeserta_id',$id)->update([
            'pelatihanpeserta_category'        => $request->pelatihanpeserta_category,
            'pelatihanpeserta_name'            => $request->pelatihanpeserta_name,
            'pelatihanpeserta_deskripsi'       => $request->pelatihanpeserta_status,
            'pelatihanpeserta_maks_register'   => $request->pelatihanpeserta_status,
            'pelatihanpeserta_start_date'      => $request->pelatihanpeserta_status,
            'pelatihanpeserta_end_date'        => $request->pelatihanpeserta_status,
            'pelatihanpeserta_waktu'           => $request->pelatihanpeserta_status,
            'pelatihanpeserta_kapasitas'       => $request->pelatihanpeserta_status,
            'pelatihanpeserta_status'          => $request->pelatihanpeserta_status,
            'pelatihanpeserta_username'        => $request->pelatihanpeserta_status,
                ]);
   
        return redirect()->route('pelatihanpeserta_index')
                        ->with('info','pelatihanpeserta updated successfully.');
    }

    public function destroy(Request $request,$id)
    {
        pelatihanpeserta::where('pelatihanpeserta_id',$id)->delete();
        return redirect()->route('pelatihanpeserta_index')
                        ->with('info','pelatihanpeserta deleted successfully');
    }

    public function details($id=0){
        $data = pelatihanpeserta::where('pelatihanpeserta_id',$id)->first();
        echo json_encode($data);
        exit;
    }
}

