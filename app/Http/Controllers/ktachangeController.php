<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KTA;

class ktachangeController extends Controller
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
        $ktachange = DB::table('kta')->groupBy('npwp')->get()->sortByDesc('id');
        return view('ktachange.index')->with('ktachange', $ktachange);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $editchange = KTA::find($id);
        if(!$editchange){
        abort(404);
        }        
        return view('ktachange.edit')->with('editchange', $editchange);
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
        $storage->nama_pemohon = $request->nama_pemohon;
        $storage->domisili = $request->domisili;
        $storage->email = $request->email;
        $storage->nohp = $request->nohp;
        $storage->save();

        return redirect('ktachange');
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
