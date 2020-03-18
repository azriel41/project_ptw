<?php

namespace App\Http\Controllers;

use App\Ruangtraining;
use Illuminate\Http\Request;
use DB;
use Auth;

class RuangtrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $ruangtraining = ruangtraining::latest()->paginate(5);
            $site = DB::table('site')->get();
            $ruangtraining = ruangtraining::all();
            // $ruangtraining = DB::table('ruangtraining')->get();
            
        return view('master.ruangtraining.index',compact('ruangtraining','site'));
    
    }

    public function create()
    {
        $site = DB::table('site')->get();
        $user = DB::table('users')->get();
        return view('master.ruangtraining.create',compact('site','user'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'ruangtraining_name' => 'required',
            'ruangtraining_site' => 'required',
            'ruangtraining_kapasitas' => 'required',
            'ruangtraining_status' => 'required',
            'created_by' => 'required',
            
        ]);
  
        ruangtraining::create($request->all());
        // dd($request->all());
        return redirect()->route('ruangtraining_index')
                        ->with('info','Ruang Training created successfully.');
    }

    public function show(ruangtraining $ruangtraining,$id)
    {
        $ruangtraining = ruangtraining::where('ruangtraining_id',$id)->first();
        // return $id;
        return view('master.ruangtraining.show',compact('ruangtraining'));
    }

     public function edit($id)
    {
         // $ruangtraining = ruangtraining::where('ruangtraining_id',$id)->first();
        // dd($ruangtraining->all());
        $ruangtraining = ruangtraining::find($id);
        // return view('master.ruangtraining.edit',compact('ruangtraining'));
        return view('master.ruangtraining.edit',['ruangtraining'=>$ruangtraining]);
    }

    public function update(Request $request,$id)
    {
        // dd($ruangtraining->all());
       $request->validate([
            'ruangtraining_name' => 'required',
            'ruangtraining_site' => 'required',
            'ruangtraining_status' => 'required',
        ]);
  
        ruangtraining::where('ruangtraining_id',$id)->update([
                    'ruangtraining_name' => $request->ruangtraining_name,
                    'ruangtraining_site' => $request->ruangtraining_site,
                    'ruangtraining_status' => $request->ruangtraining_status,
                ]);
   
        return redirect()->route('ruangtraining_index')
                        ->with('info','Ruang Training updated successfully.');
    }

    public function destroy(Request $request,$id)
    {
        ruangtraining::where('ruangtraining_id',$id)->delete();
  
        return redirect()->route('ruangtraining_index')
                        ->with('info','Ruang Training deleted successfully');
    }
}
