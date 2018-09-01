<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KTA;

class ktanewController extends Controller
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
        $ktanew = KTA::all()->sortByDesc('id');
        return view('ktanew.index')->with('ktanew', $ktanew);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ktanew.create');
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

        $storage = new KTA();
        $storage->npwp = $request->npwp;
        $storage->nama_bu = $request->nama_bu;
        $storage->nama_pemohon = $request->nama_pemohon;
        $storage->domisili = $request->domisili;
        $storage->email = $request->email;
        $storage->nohp = $request->nohp;
        $storage->a1 = $request->a1;
        $storage->a2 = $request->a2;
        $storage->a3 = $request->a3;
        $storage->a4 = $request->a4;
        $storage->a5 = $request->a5;
        $storage->a6 = $request->a6;
        $storage->jenis = $request->jenis;
        $storage->save();

        return redirect('ktanew');
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
        $editnew = KTA::find($id);
        if(!$editnew){
        abort(404);
        }        
        return view('ktanew.edit')->with('editnew', $editnew);
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

        $storage = KTA::find($id);
        $storage->npwp = $request->npwp;
        $storage->nama_bu = $request->nama_bu;
        $storage->domisili = $request->domisili;
        $storage->a1 = $request->a1;
        $storage->a2 = $request->a2;
        $storage->a3 = $request->a3;
        $storage->a4 = $request->a4;
        $storage->a5 = $request->a5;
        $storage->a6 = $request->a6;
        $storage->catatan = $request->catatan;
        $storage->save();

        return redirect('ktanew');
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
