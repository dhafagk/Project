<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KTA;
use PDF;
use DB;

class rekapController extends Controller
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
        // $absen = Absen::with('siswa')->where(\DB::raw("DATE_FORMAT(created_at,'%d-%m-%Y')"), '=', $tanggal)
        //             ->get();
        // return view('rekap.pdf')->with('data', $absen)->with($tanggal);

        $kta = DB::table('kta')->groupBy('npwp')->get()->sortByDesc('id');
        return view('rekap.index')->with('kta', $kta);
    }

    public function download()
    {
        $kta = DB::table('kta')->groupBy('npwp')->get()->sortByDesc('id');
        $pdf = PDF::loadView('rekap.download', ['kta' => $kta]);
        return $pdf->download('rekap-data.pdf');
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
        //
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
        //
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
