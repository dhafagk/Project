<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SBUJK;

class sbujkController extends Controller
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
        $sbujk = SBUJK::all()->sortByDesc('id');
        return view('sbujk.index')->with('sbujk', $sbujk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sbujk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request ,[
          'npwp' => 'required',
          'nama_bu' => 'required',
          'nama_pemohon' => 'required',
          'domisili' => 'required',
          'email' => 'required',
          'nohp' => 'required',
        ]);

        $storage = new SBUJK();
        $storage->npwp = $request->npwp;
        $storage->nama_bu = $request->nama_bu;
        $storage->nama_pemohon = $request->nama_pemohon;
        $storage->domisili = $request->domisili;
        $storage->email = $request->email;
        $storage->nohp = $request->nohp;
        $storage->b1 = $request->b1;
        $storage->b2 = $request->b2;
        $storage->b3 = $request->b3;
        $storage->b4 = $request->b4;
        $storage->b5 = $request->b5;
        $storage->b6 = $request->b6;
        $storage->b7 = $request->b7;
        $storage->b8 = $request->b8;
        $storage->b9 = $request->b9;
        $storage->b10 = $request->b10;
        $storage->b11 = $request->b11;
        $storage->jenis = $request->jenis;
        $storage->save();

        return redirect('sbujk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = SBUJK::find($id);
        if(!$edit){
        abort(404);
        }        
        return view('sbujk.edit')->with('edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $storage = SBUJK::find($id);
        $storage->npwp = $request->npwp;
        $storage->nama_bu = $request->nama_bu;
        $storage->domisili = $request->domisili;
        $storage->b1 = $request->b1;
        $storage->b2 = $request->b2;
        $storage->b3 = $request->b3;
        $storage->b4 = $request->b4;
        $storage->b5 = $request->b5;
        $storage->b6 = $request->b6;
        $storage->b7 = $request->b7;
        $storage->b8 = $request->b8;
        $storage->b9 = $request->b9;
        $storage->b10 = $request->b10;
        $storage->b11 = $request->b11;
        $storage->catatan = $request->catatan;
        $storage->save();

        return redirect('sbujk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
