<?php

namespace App\Http\Controllers;

use App\Pendaftaranpelatihan;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class PendaftaranpelatihanController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        // $user = DB::table('users')->select
        // (
        //     'site.site_name'
        // )
        // ->leftjoin('site','site.site_id','users.site')


        // ->get();
        // $pendaftaranpelatihan = pendaftaranpelatihan::all();
        // $pendaftaranpelatihan = pendaftaranpelatihan::all();
        $pendaftaranpelatihan = DB::table('pendaftaranpelatihan')->select
        (
            'site.site_name',
            

        )
        ->leftjoin('site','site.site_id','pendaftaranpelatihan.pendaftaranpelatihan_site')
        ->get();

        $user = DB::table('users')
                        // ->leftjoin('m_organization','m_organization.o_id','d_mem.m_organization')
                        // ->leftjoin('m_directorate','m_directorate.dr_id','d_mem.m_directorate')
                        // ->leftjoin('m_department','m_department.d_id','d_mem.m_department')
                        // ->leftjoin('m_unit','m_unit.u_id','d_mem.m_unit')
                        ->leftjoin('site','site.site_id','users.site')
                        ->get();
        // $session_data = Session::all();
        

        return view('master.pendaftaranpelatihan.index',compact('pendaftaranpelatihan','user'));
    }
    
    public function create()
    {
        $pelatihanpeserta = DB::table('pelatihanpeserta')->get();
         $pelatihantrainer = DB::table('pelatihantrainer')->get();
         $trainer = DB::table('trainer')->get();
         $user = DB::table('users')->get();
        return view('master.pendaftaranpelatihan.create',compact('pelatihantrainer','trainer','user','pelatihanpeserta'));
    }
    
    public function store(Request $request)
    {
        \App\pendaftaranpelatihan::create(
            [
            'pendaftaranpelatihan_id'                   => $request->pendaftaranpelatihan_id,
            'pendaftaranpelatihan_name'                 => $request->pendaftaranpelatihan_name,
            'pendaftaranpelatihan_deskripsi'            => $request->pendaftaranpelatihan_deskripsi,
            'pendaftaranpelatihan_namatrainer'          => $request->pendaftaranpelatihan_namatrainer,
            'pendaftaranpelatihan_jumlahpeserta'        => $request->pendaftaranpelatihan_jumlahpeserta,
            'pendaftaranpelatihan_type'                 => $request->pendaftaranpelatihan_type,
            'pendaftaranpelatihan_startdate'            => date('Y-m-d',strtotime($request->pendaftaranpelatihan_startdate)),
            'pendaftaranpelatihan_enddate'              => date('Y-m-d',strtotime($request->pendaftaranpelatihan_enddate)),
            'pendaftaranpelatihan_maksregister'         => date('Y-m-d',strtotime($request->pendaftaranpelatihan_maksregister)),
            'pendaftaranpelatihan_username'             => $request->pendaftaranpelatihan_username,
            'pendaftaranpelatihan_status'               => $request->pendaftaranpelatihan_status,
            'created_by'                                => $request->created_by,
            'updated_by'                                => $request->updated_by,
        ]);

        
        return redirect()->route('pendaftaranpelatihan_index')
                        ->with('info_create','Pelatihan Peserta Created successfully.');
    }

    public function show(pendaftaranpelatihan $pendaftaranpelatihan,$id)
    {

      $pendaftaranpelatihan = pendaftaranpelatihan::where('pendaftaranpelatihan_id',$id)->first();
       
        return view('master.pendaftaranpelatihan.show',compact('pendaftaranpelatihan'));
    }

     public function edit($id)
    {
      
        $pendaftaranpelatihan = pendaftaranpelatihan::find($id);
        return view('master.pendaftaranpelatihan.edit',['pendaftaranpelatihan'=>$pendaftaranpelatihan]);
    }

    public function update(Request $request,$id)
    {
        // dd($pendaftaranpelatihan->all());
       $request->validate([
            'pendaftaranpelatihan_category'        => 'required',
            'pendaftaranpelatihan_name'            => 'required',
            'pendaftaranpelatihan_deskripsi'       => 'required',
            'pendaftaranpelatihan_maks_register'   => 'required',
            'pendaftaranpelatihan_start_date'      => 'required',
            'pendaftaranpelatihan_end_date'        => 'required',
            'pendaftaranpelatihan_waktu'           => 'required',
            'pendaftaranpelatihan_kapasitas'       => 'required',
            'pendaftaranpelatihan_status'          => 'required',
            'pendaftaranpelatihan_username'        => 'required',
            'updated_at'                           => 'required',
            'created_date'                         => 'required'
        ]);
  
        pendaftaranpelatihan::where('pendaftaranpelatihan_id',$id)->update([
            'pendaftaranpelatihan_category'        => $request->pendaftaranpelatihan_category,
            'pendaftaranpelatihan_name'            => $request->pendaftaranpelatihan_name,
            'pendaftaranpelatihan_deskripsi'       => $request->pendaftaranpelatihan_status,
            'pendaftaranpelatihan_maks_register'   => $request->pendaftaranpelatihan_status,
            'pendaftaranpelatihan_start_date'      => $request->pendaftaranpelatihan_status,
            'pendaftaranpelatihan_end_date'        => $request->pendaftaranpelatihan_status,
            'pendaftaranpelatihan_waktu'           => $request->pendaftaranpelatihan_status,
            'pendaftaranpelatihan_kapasitas'       => $request->pendaftaranpelatihan_status,
            'pendaftaranpelatihan_status'          => $request->pendaftaranpelatihan_status,
            'pendaftaranpelatihan_username'        => $request->pendaftaranpelatihan_status,
                ]);
   
        return redirect()->route('pendaftaranpelatihan_index')
                        ->with('info','pendaftaranpelatihan updated successfully.');
    }

    public function destroy(Request $request,$id)
    {
        pendaftaranpelatihan::where('pendaftaranpelatihan_id',$id)->delete();
        return redirect()->route('pendaftaranpelatihan_index')
                        ->with('info','pendaftaranpelatihan deleted successfully');
    }

    public function details($id=0){
        $data = pendaftaranpelatihan::where('pendaftaranpelatihan_id',$id)->first();
        echo json_encode($data);
        exit;
    }
}

