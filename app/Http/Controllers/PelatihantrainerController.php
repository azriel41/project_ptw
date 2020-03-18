<?php

namespace App\Http\Controllers;

use App\Pelatihantrainer;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\models;
class PelatihantrainerController extends Controller
{

    protected $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }
    
    public function index()
    
    {
        // $pelatihantrainer = pelatihantrainer::latest()->paginate(5);
        $pelatihantrainer = pelatihantrainer::all();
        return view('master.pelatihantrainer.index',compact('pelatihantrainer'));
    }
    

    
    public function create()
    {
        $user = $this->model->User()->orderBy('id', 'asc')->get();
        $pelatihantrainer = $this->model->Pelatihantrainer()->orderBy('pelatihantrainer_id', 'asc')->get();
        $ruang_training = $this->model->Ruangtraining()->get();

        return view('master.pelatihantrainer.create',compact('user','pelatihantrainer','ruang_training'));

    }

   
    public function store(Request $req)
    {   
        // return $req->all();
        DB::beginTransaction();
        try {
            if ($req->pelatihantrainer_namatrainer_internal == '' || $req->pelatihantrainer_namatrainer_internal == null) {
                $pelatihantrainer_namatrainer  = $req->pelatihantrainer_namatrainer_external;
            }else{
                $pelatihantrainer_namatrainer = $req->pelatihantrainer_namatrainer_internal;
            }
            $ruang_training = $this->model->Pelatihantrainer()->create([
                'pelatihantrainer_name'         =>$req->pelatihantrainer_name,
                'pelatihantrainer_deskripsi'    =>$req->pelatihantrainer_deskripsi,
                'pelatihantrainer_peserta'      =>$req->pelatihantrainer_peserta,
                'pelatihantrainer_ruangtraining'=>$req->pelatihantrainer_ruangtraining,
                'pelatihantrainer_category'     =>$req->pelatihantrainer_category,
                'pelatihantrainer_namatrainer'  =>$pelatihantrainer_namatrainer,
                'pelatihantrainer_status'       =>$req->pelatihantrainer_status,
                'created_by'                    =>Auth::user()->id,
                'created_at'                    =>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        } catch (\Exception $e) {
            DB::rollback();
            return Response()->json(['status'=>'gagal','exception'=>$e]);
            // something went wrong
        }
        return redirect()->route('pelatihantrainer_index')
                        ->with('info','Pelatihan Created successfully.');
    }

    
    public function show(pelatihantrainer $pelatihantrainer,$id)
    {
        $pelatihantrainer = pelatihantrainer::where('pelatihantrainer_id',$id)->first();
        // return $id;
        return view('master.pelatihantrainer.show',compact('pelatihantrainer'));
    }

   
     public function edit($id)
    {
         // $pelatihantrainer = pelatihantrainer::where('pelatihantrainer_id',$id)->first();
        // dd($pelatihantrainer->all());
        $pelatihantrainer = pelatihantrainer::find($id);
        // return view('master.pelatihantrainer.edit',compact('pelatihantrainer'));
        return view('master.pelatihantrainer.edit',['pelatihantrainer'=>$pelatihantrainer]);
    }

    
    public function update(Request $req,$id)
    {
        // dd($pelatihantrainer->all());
       $req->validate([
            'pelatihantrainer_name' => 'required',
            'pelatihantrainer_deskripsi' => 'required',
            'pelatihantrainer_peserta' => 'required',
            'pelatihantrainer_status' => 'required',
        ]);
  
        pelatihantrainer::where('pelatihantrainer_id',$id)->update([
                    'pelatihantrainer_name' => $req->pelatihantrainer_name,
                    'pelatihantrainer_deskripsi' => $req->pelatihantrainer_deskripsi,
                    'pelatihantrainer_peserta' => $req->pelatihantrainer_peserta,
                    'pelatihantrainer_status' => $req->pelatihantrainer_status,
                ]);
   
        return redirect()->route('pelatihantrainer_index')
                        ->with('info','Pelatihan updated successfully.');
    }

   
    public function destroy(Request $req,$id)
    {
        pelatihantrainer::where('pelatihantrainer_id',$id)->delete();
  
        return redirect()->route('pelatihantrainer_index')
                        ->with('info','Pelatihan deleted successfully');
    }
}
