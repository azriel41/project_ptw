<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;
use Illuminate\support\Str;

class SiteController extends Controller
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
            $site = site::all();
            return view('master.site.index',compact('site'));
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.site.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $site = Site::create([
        'site_id' => $request->site_id,
        'site_name' => $request->site_name,
        'slug' => str::slug($request->site_name),
        'site_status' => $request->site_status

        ]);
        return redirect()->route('site_index')
                        ->with('info_create','Site created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\site  $site
     * @return \Illuminate\Http\Response
     */
    // public function show(site $site,$id,$slug)
    // {
    //     $site = site::where('site_id',$slug)->first();
    //     // return $id;
    //     return view('master.site.show',compact('site'));
    // }

    // public function show($id, $slug) {
    // $site = site::where('id', $id)
    //               ->where('slug', $slug)
    //               ->first();

    //     return view('site',compact('site',$site));
    //    }  

       public function show($slug){
    $site = site::where('slug', $slug)->first();
    return view('master.site.show')->with('site', $site);
}         

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\site  $site
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
         // $site = site::where('site_id',$id)->first();
        // dd($site->all());
        $site = site::find($id);
        // return view('master.site.edit',compact('site'));
        return view('master.site.edit',['site'=>$site]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($site->all());
       $request->validate([
            'site_name' => 'required',
            'site_status' => 'required',
        ]);
  
        site::where('site_id',$id)->update([
                    'site_name' => $request->site_name,
                    'site_status' => $request->site_status,
                ]);
   
        return redirect()->route('site_index')
                        ->with('info_update','Site updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        site::where('site_id',$id)->delete();
  
        return redirect()->route('site_index')
                        ->with('info_delete','Site deleted successfully');
    }
}
