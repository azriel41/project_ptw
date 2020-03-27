<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    
        {
            $user = user::all();
            return view('master.user.index',compact('user'));
        }
    

   
    public function create()
    {
            return view('master.user.create',compact('site','direktorat','departemen','unit'));
        // return view('master.user.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required',
            'site' => 'required',
            'direktorat' => 'required',
            'departemen' => 'required',
            'hakakses' => 'required',
            'nik' => 'required',
        ]);
  
        user::create($request->all());
        return redirect()->route('user_index')
                        ->with('info','User created successfully.');
    }

    public function show(user $user)
    {
        // $user = users::where('id',$id)->first();
        $user = DB::table('users')
                        ->leftjoin('direktorat','direktorat.direktorat_id','users.direktorat')
                        ->leftjoin('departemen','departemen.departemen_id','users.departemen')
                        ->leftjoin('unit','unit.unit_id','users.unit')
                        ->leftjoin('site','site.site_id','users.site')
                        ->first();
        // return $user;
        return view('master.user.show',compact('user'));
    }

   
     public function edit($id)
    {
         // $user = user::where('user_id',$id)->first();
        // dd($user->all());
        // $user = user::find($id);
        // $site = site::find($site_id);
        $user = DB::table('users')
                        ->leftjoin('direktorat','direktorat.direktorat_id','users.direktorat')
                        ->leftjoin('departemen','departemen.departemen_id','users.departemen')
                        ->leftjoin('unit','unit.unit_id','users.unit')
                        ->leftjoin('site','site.site_id','users.site')
                        ->first();
        // return view('master.user.edit',compact('user'));
        // return view('master.user.edit',['user'=>$user]);
        return view('master.user.edit',compact('user','site'));

    }

    
    public function update(Request $request,$id)
    {
        // dd($user->all());
       $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required',
            'site' => 'required',
            'direktorat' => 'required',
            'departemen' => 'required',
            'unit' => 'required',
            'hakakses' => 'required',
        ]);
  
        user::where('id',$id)->update([
                    'username' => $request->username,
                    'fullname' => $request->fullname,
                    'email' => $request->email,
                    'site' => $request->site,
                    'direktorat' => $request->direktorat,
                    'departemen' => $request->departemen,
                    'unit' => $request->unit,
                    'hakakses' => $request->hakakses,
                ]);
   
        return redirect()->route('user_index')
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
        users::where('id',$id)->delete();
  
        return redirect()->route('user_index')
                        ->with('info','User deleted successfully');
    }

}
