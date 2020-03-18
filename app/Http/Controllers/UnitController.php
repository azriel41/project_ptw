<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
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
            $unit = unit::all();
            return view('master.unit.index',compact('unit'));
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.unit.create');
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
            'unit_name' => 'required',
            'unit_status' => 'required',
        ]);
  
        unit::create($request->all());
        return redirect()->route('unit_index')
                        ->with('info','unit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(unit $unit,$id)
    {
        $unit = unit::where('unit_id',$id)->first();
        // return $id;
        return view('master.unit.show',compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\unit  $unit
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
         // $unit = unit::where('unit_id',$id)->first();
        // dd($unit->all());
        $unit = unit::find($id);
        // return view('master.unit.edit',compact('unit'));
        return view('master.unit.edit',['unit'=>$unit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($unit->all());
       $request->validate([
            'unit_name' => 'required',
            'unit_status' => 'required',
        ]);
  
        unit::where('unit_id',$id)->update([
                    'unit_name' => $request->unit_name,
                    'unit_status' => $request->unit_status,
                ]);
   
        return redirect()->route('unit_index')
                        ->with('info','unit updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        unit::where('unit_id',$id)->delete();
  
        return redirect()->route('unit_index')
                        ->with('info','Unit deleted successfully');
    }
}
