<?php

namespace App\Http\Controllers;

use App\User;
use App\models;
use Illuminate\Http\Request;
use DB;
use validate;
use Illuminate\Support\Facades\Storage;
use Auth; 
use Carbon\carbon;
use Response;
class akunController extends Controller
{
    protected $models;
    public function __construct()
    {
        $this->model = new models;
        $this->middleware('auth');
    }
    
    public function index()
    
        {
            $akun = $this->model->akun()->get();
            return view('master.akun.index',compact('akun'));
        }
        
   
    public function create()
    {

            return view('master.akun.create');
        // return view('master.user.create');
    }

    
    public function store(Request $req)
    {
        return DB::transaction(function() use ($req){
                

            if ($req->id == null or $req->id == 'null' or $req->id == '') {

                $id = $this->model->akun()->max('id')+1;

                $file = $req->file('image');

                if ($file != null) {
                    $fileName = 'akun_'.$id.'.'.$file->getClientOriginalExtension();
                    Storage::put($fileName,file_get_contents($file));
                }else{
                    return Response::json(['status'=>2,'pesan'=>'Gambar harus diisi']);
                }

                $this->model->akun()
                     ->create([
                        'id'                        => $id,
                        'nik'                       => $req->nik,
                        'nama'                      => $req->nama,
                        'jenis_kelamin'             => $req->jenin_kelamin,
                        'tempat_lahir'              => $req->tempat_lahir,
                        'tanggal_lahir'             => carbon::parse($req->tanggal_lahir),
                        'agama'                     => $req->agama,
                        'pendidikan'                => $req->pendidikan,
                        'no_identitas'              => $req->no_identitas,
                        'status_kerja'              => $req->status_kerja,
                        'status_kawin'              => $req->status_kawin,
                        'alamat'                    => $req->alamat,
                        'image'                     => $fileName,
                        'status'                    => 'true',
                        'keterangan'                => $req->keterangan,
                        'created_by'                => Auth::User()->fullname,
                        'updated_by'                => Auth::User()->fullname,
                        'created_at'                => carbon::now(),
                        'updated_at'                => carbon::now()
                     ]);

                return redirect('akun')->with('status', 'Data berhasil disimpan');

            }

        });
    }

    public function edit($id)
    {
        return view('master.akun.edit',compact('akun'));

    }

    
    public function update(Request $request,$id)
    {
  
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
    

}
