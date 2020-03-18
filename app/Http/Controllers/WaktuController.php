<?php

namespace App\Http\Controllers;

use App\Waktu;
use Illuminate\Http\Request;

class WaktuController extends Controller
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
            $waktu = waktu::all();
            return view('master.waktu.index',compact('waktu'));
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.waktu.create');
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
            'waktu_awal' => 'required',
            'waktu_akhir' => 'required',
            'waktu_status' => 'required',
        ]);
  
        waktu::create($request->all());
        return redirect()->route('waktu_index')
                        ->with('info','Waktu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\waktu  $waktu
     * @return \Illuminate\Http\Response
     */
    public function show(waktu $waktu,$id)
    {
        $waktu = waktu::where('waktu_id',$id)->first();
        // return $id;
        return view('master.waktu.show',compact('waktu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\waktu  $waktu
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
         // $waktu = waktu::where('waktu_id',$id)->first();
        // dd($waktu->all());
        $waktu = waktu::find($id);
        // return view('master.waktu.edit',compact('waktu'));
        return view('master.waktu.edit',['waktu'=>$waktu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\waktu  $waktu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($waktu->all());
       $request->validate([
            'waktu_awal' => 'required',
            'waktu_akhir' => 'required',
            'waktu_status' => 'required',
        ]);
  
        waktu::where('waktu_id',$id)->update([
                    'waktu_awal' => $request->waktu_awal,
                    'waktu_akhir' => $request->waktu_akhir,
                    'waktu_status' => $request->waktu_status,
                ]);
   
        return redirect()->route('waktu_index')
                        ->with('info','Waktu updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\waktu  $waktu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        waktu::where('waktu_id',$id)->delete();
  
        return redirect()->route('waktu_index')
                        ->with('info','Waktu deleted successfully');
    }
}
