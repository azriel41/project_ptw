<?php

namespace App\Http\Controllers;

use App\Pelatihan;
use Illuminate\Http\Request;
use DB;


class PelatihanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    
        {
            $pelatihan = pelatihan::all();
            $site = DB::table('site')->get();
            return view('master.pelatihan.index',compact('pelatihan','site'));
        }

    public function create()
    {
            $site = DB::table('site')
            ->orderBy('site_name', 'asc')
            ->get();

            $direktorat = DB::table('direktorat')
            ->orderBy('direktorat_name', 'asc')
            ->get();

            $waktu = DB::table('waktu')
            ->orderBy('waktu_id', 'asc')
            ->get();

            $user = DB::table('users')
            ->orderBy('id', 'asc')
            ->get();

            // return view('master.pelatihan.create');
        return view('master.pelatihan.create',compact('site','direktorat','waktu','user'));

    }

    // public function store(Request $request)
    // {

    //     $request->validate([
    //         'pelatihan_name' => 'required',
    //         'pelatihan_description'=> 'required',
    //         'pelatihan_start_date'=> 'required',
    //         'pelatihan_end_date'=> 'required',
    //         'pelatihan_kapasitas'=> 'required',
    //         'pelatihan_batch'=> 'required',
    //         'pelatihan_harian'=> 'required',
    //         'pelatihan_waktu' => 'required',
    //         'pelatihan_status' => 'required',
    //     ]);

    //     $arrayTostring = implode(',', $request->input('pelatihan_waktu'));
    //     $inputValue['pelatihan_waktu'] = $arrayTostring;
    //     $success = pelatihan::create($inputValue);
    //     return redirect()->route('pelatihan_index')
    //                     ->with('info','Pelatihan created successfully.');
    // }

    public function store(Request $request)
    {
        $pelatihan = pelatihan::all();
        $request->validate([
            // 'pelatihan_harian' => 'required',
            // 'pelatihan_batch' => 'required',
            'pelatihan_name' => 'required',
            'pelatihan_description' => 'required',
            // 'pelatihan_site' => 'required',
            // 'pelatihan_direktorat' => 'required',
            // 'pelatihan_departemen' => 'required',
            // 'pelatihan_unit' => 'required',
            'pelatihan_maks_register' => 'required',
            // 'pelatihan_start_date' => 'required',
            // 'pelatihan_end_date' => 'required',
            'pelatihan_waktu' => 'required',
            // 'pelatihan_end_time' => 'required',
            // 'pelatihan_created_at' => 'required',
            // 'pelatihan_created_by' => 'required',
            'pelatihan_kapasitas' => 'required',
            'pelatihan_status' => 'required',
            // 'updated_at' => 'required',
            // 'created_at' => 'required',
            'pelatihan_username' => 'required',
        ]);

        $arrayTostring = implode(',', $request->input('pelatihan_waktu'));
        $pelatihan['pelatihan_waktu'] = $arrayTostring;

        // echo $pelatihan;
        // exit;
        $success = pelatihan::create($request->all());
        dd($success);
  
        
        return redirect()->route('pelatihan_index')
                        ->with('info','Pelatihan created successfully.');
    }

    public function show(pelatihan $pelatihan,$id)
    {
        $pelatihan = pelatihan::where('pelatihan_id',$id)->first();
        // return $id;
        return view('master.pelatihan.show',compact('pelatihan'));
    }

     public function edit($id)
    {
         // $pelatihan = pelatihan::where('pelatihan_id',$id)->first();
        // dd($pelatihan->all());
        $pelatihan = pelatihan::find($id);
        // return view('master.pelatihan.edit',compact('pelatihan'));
        return view('master.pelatihan.edit',['pelatihan'=>$pelatihan]);
    }

    public function update(Request $request,$id)
    {
       $request->validate([
            'pelatihan_awal' => 'required',
            'pelatihan_akhir' => 'required',
            'pelatihan_status' => 'required',
        ]);
  
        pelatihan::where('pelatihan_id',$id)->update([
                    'pelatihan_awal' => $request->pelatihan_awal,
                    'pelatihan_akhir' => $request->pelatihan_akhir,
                    'pelatihan_status' => $request->pelatihan_status,
                ]);
   
        return redirect()->route('pelatihan_index')
                        ->with('info','pelatihan updated successfully.');
    }

    public function destroy(Request $request,$id)
    {
        pelatihan::where('pelatihan_id',$id)->delete();
  
        return redirect()->route('pelatihan_index')
                        ->with('info','pelatihan deleted successfully');
    }
}
