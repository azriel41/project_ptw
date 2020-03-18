<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;
use DB;

class MeetingController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $meeting = meeting::all();
        return view('master.meeting.index',compact('meeting'));

        
    }
    
    public function create()
    {
         $pelatihantrainer = DB::table('pelatihantrainer')->get();
         $trainer = DB::table('trainer')->get();
         $user = DB::table('users')->get();
        return view('master.meeting.create',compact('pelatihantrainer','trainer','user'));

    }
    
    public function store(Request $request)
    {

        \App\meeting::create(
            [
            'meeting_id'                => $request->meeting_id,
            'meeting_name'              => $request->meeting_name,
            'meeting_deskripsi'         => $request->meeting_deskripsi,
            'meeting_namatrainer'       => $request->meeting_namatrainer,
            'meeting_jumlahpeserta'     => $request->meeting_jumlahpeserta,
            'meeting_type'              => $request->meeting_type,
            'meeting_startdate'         => date('Y-m-d',strtotime($request->meeting_startdate)),
            'meeting_enddate'           => date('Y-m-d',strtotime($request->meeting_enddate)),
            'meeting_maksregister'      => date('Y-m-d',strtotime($request->meeting_maksregister)),
            'meeting_username'          => $request->meeting_username,
            'meeting_status'            => $request->meeting_status,
            'created_by'                => $request->created_by,
            'updated_by'                => $request->updated_by,
        ]);

        
        return redirect()->route('meeting_index')
                        ->with('info_create','Pelatihan Peserta Created successfully.');
    }

    public function show(meeting $meeting,$id)
    {

      $meeting = meeting::where('meeting_id',$id)->first();
       
        return view('master.meeting.show',compact('meeting'));
    }

     public function edit($id)
    {
      
        $meeting = meeting::find($id);
        return view('master.meeting.edit',['meeting'=>$meeting]);
    }

    public function update(Request $request,$id)
    {
        // dd($meeting->all());
       $request->validate([
            'meeting_category'        => 'required',
            'meeting_name'            => 'required',
            'meeting_deskripsi'       => 'required',
            'meeting_maks_register'   => 'required',
            'meeting_start_date'      => 'required',
            'meeting_end_date'        => 'required',
            'meeting_waktu'           => 'required',
            'meeting_kapasitas'       => 'required',
            'meeting_status'          => 'required',
            'meeting_username'        => 'required',
            'updated_at'                       => 'required',
            'created_date'                     => 'required'
        ]);
  
        meeting::where('meeting_id',$id)->update([
            'meeting_category'        => $request->meeting_category,
            'meeting_name'            => $request->meeting_name,
            'meeting_deskripsi'       => $request->meeting_status,
            'meeting_maks_register'   => $request->meeting_status,
            'meeting_start_date'      => $request->meeting_status,
            'meeting_end_date'        => $request->meeting_status,
            'meeting_waktu'           => $request->meeting_status,
            'meeting_kapasitas'       => $request->meeting_status,
            'meeting_status'          => $request->meeting_status,
            'meeting_username'        => $request->meeting_status,
                ]);
   
        return redirect()->route('meeting_index')
                        ->with('info','meeting updated successfully.');
    }

    public function destroy(Request $request,$id)
    {
        meeting::where('meeting_id',$id)->delete();
        return redirect()->route('meeting_index')
                        ->with('info','meeting deleted successfully');
    }

    public function details($id=0){
        $data = meeting::where('meeting_id',$id)->first();
        echo json_encode($data);
        exit;
    }
}

