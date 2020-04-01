<?php

namespace App\Http\Controllers;

use App\User;
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
            $user = user::all();
            return view('master.departemen.index');
        }
    

   
    public function create()
    {
            return view('master.departemen.create');
        // return view('master.user.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'kode_departemen' => 'required',
            'nama_departemen' => 'required',
            'keterangan' => 'required',
        ]);
  
        master_departemen::create($request->all());
        return redirect()->route('departemen_index')
                        ->with('info','User created successfully.');
    }

    public function show(user $user)
    {
        return view('master.departemen.show',compact('departemen'));
    }

   
     public function edit($id)
    {
        return view('master.departemen.edit',compact('departemen'));

    }

    
    public function update(Request $request,$id)
    {
        // dd($user->all());
       $request->validate([
            'kode_departemen' => 'required',
            'nama_departemen' => 'required',
            'keterangan' => 'required',
        ]);
  
        departemen::where('id',$id)->update([
                    'kode_departemen' => $request->kode_departemen,
                    'nama_departemen' => $request->nama_departemen,
                    'keterangan' => $request->keterangan,
                    
                ]);
   
        return redirect()->route('departemen_index')
                        ->with('info','User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        departemen::where('id',$id)->delete();
  
        return redirect()->route('departemen_index')
                        ->with('info','User deleted successfully');
    }

}
