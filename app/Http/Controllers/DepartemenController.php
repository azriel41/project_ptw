<?php

namespace App\Http\Controllers;

use App\Departemen;
use Illuminate\Http\Request;
use DB;

class DepartemenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    
        {
            $departemen = departemen::all();
            return view('master.departemen.index',compact('departemen'));
        }
    

   
    public function create()
    {
            return view('master.departemen.create');
        // return view('master.departemen.create');
    }

    
    public function save(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);
  
        departemen::create($request->all());
        return redirect()->route('departemen_index')
                        ->with('info','departemen created successfully.');
    }

    public function show(departemen $departemen)
    {
        // $departemen = departemen::where('id',$id)->first();
        $departemen = DB::table('departemen')
                        ->leftjoin('departemen','departemen.departemen_id','departemen.departemen')
                        ->first();
        // return $departemen;
        return view('master.departemen.show',compact('departemen'));
    }

   
     public function edit($id)
    {
         // $departemen = departemen::where('departemen_id',$id)->first();
        // dd($departemen->all());
        // $departemen = departemen::find($id);
        // $site = site::find($site_id);
        $departemen = DB::table('departemen')
                        ->leftjoin('departemen','departemen.departemen_id','departemen.departemen')
                        ->first();
        // return view('master.departemen.edit',compact('departemen'));
        // return view('master.departemen.edit',['departemen'=>$departemen]);
        return view('master.departemen.edit',compact('departemen','site'));

    }

    
    public function update(Request $request,$id)
    {
        // dd($departemen->all());
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
        ]);
  
        departemen::where('id',$id)->update([
                    'kode' => $request->kode,
                    'nama' => $request->nama,
                    'keterangan' => $request->keterangan,
                ]);
   
        return redirect()->route('departemen_index')
                        ->with('info','departemen updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        departemen::where('id',$id)->delete();
  
        return redirect()->route('departemen_index')
                        ->with('info','departemen deleted successfully');
    }

}
