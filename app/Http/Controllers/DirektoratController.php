<?php

namespace App\Http\Controllers;

use App\Direktorat;
use Illuminate\Http\Request;

class DirektoratController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
        {
            $direktorat = direktorat::all();
            return view('master.direktorat.index',compact('direktorat'));
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.direktorat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'direktorat_name' => 'required',
            'direktorat_status' => 'required',
        ]);
  
        direktorat::create($request->all());
        return redirect()->route('direktorat_index')
                        ->with('info','direktorat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\direktorat  $direktorat
     * @return \Illuminate\Http\Response
     */
    public function show(direktorat $direktorat,$id)
    {
        $direktorat = direktorat::where('direktorat_id',$id)->first();
        // return $id;
        return view('master.direktorat.show',compact('direktorat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\direktorat  $direktorat
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
         // $direktorat = direktorat::where('direktorat_id',$id)->first();
        // dd($direktorat->all());
        $direktorat = direktorat::find($id);
        // return view('master.direktorat.edit',compact('direktorat'));
        return view('master.direktorat.edit',['direktorat'=>$direktorat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\direktorat  $direktorat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($direktorat->all());
       $request->validate([
            'direktorat_name' => 'required',
            'direktorat_status' => 'required',
        ]);
  
        direktorat::where('direktorat_id',$id)->update([
                    'direktorat_name' => $request->direktorat_name,
                    'direktorat_status' => $request->direktorat_status,
                ]);
   
        return redirect()->route('direktorat_index')
                        ->with('info','direktorat updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\direktorat  $direktorat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        direktorat::where('direktorat_id',$id)->delete();
  
        return redirect()->route('direktorat_index')
                        ->with('info','direktorat deleted successfully');
    }
}
