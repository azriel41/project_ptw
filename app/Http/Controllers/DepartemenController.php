<?php

namespace App\Http\Controllers;

use App\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    
        {
        // $departemen = Departemen::latest()->paginate(5);
            $departemen = departemen::all();
        return view('master.departemen.index',compact('departemen'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.departemen.create');
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
            'departemen_name' => 'required',
            'departemen_status' => 'required',
        ]);
  
        Departemen::create($request->all());
        return redirect()->route('departemen_index')
                        ->with('info','Departemen created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function show(Departemen $departemen,$id)
    {
        $departemen = Departemen::where('departemen_id',$id)->first();
        // return $id;
        return view('master.departemen.show',compact('departemen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
         // $departemen = Departemen::where('departemen_id',$id)->first();
        // dd($departemen->all());
        $departemen = Departemen::find($id);
        // return view('master.departemen.edit',compact('departemen'));
        return view('master.departemen.edit',['departemen'=>$departemen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($departemen->all());
       $request->validate([
            'departemen_name' => 'required',
            'departemen_status' => 'required',
        ]);
  
        Departemen::where('departemen_id',$id)->update([
                    'departemen_name' => $request->departemen_name,
                    'departemen_status' => $request->departemen_status,
                ]);
   
        return redirect()->route('departemen_index')
                        ->with('info','Departemen updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Departemen::where('departemen_id',$id)->delete();
  
        return redirect()->route('departemen_index')
                        ->with('info','Departemen deleted successfully');
    }
}
