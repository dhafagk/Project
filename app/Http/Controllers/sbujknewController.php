<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SBUJK;

class sbujknewController extends Controller
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
        $sbujknew = SBUJK::all()->sortByDesc('id');
        return view('sbujknew.index')->with('sbujknew', $sbujknew);
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
        $editnew = SBUJK::find($id);
        if(!$editnew){
        abort(404);
        }        
        return view('sbujknew.edit')->with('editnew', $editnew);
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

        return redirect('sbujknew');
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
