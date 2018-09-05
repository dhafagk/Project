<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KTA;
use DB;

class ktaController extends Controller
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
        // $duplicate = DB::table('kta')->select('npwp')->distinct()->get();
        $kta = DB::table('kta')->groupBy('npwp')->get()->sortByDesc('id');
        // $kta = KTA::all()->sortByDesc('id');
        return view('kta.index')->with('kta', $kta);//->with('dd', $duplicate);

        // $slss = DB::table('kta')->select('SELECT npwp FROM kta UNION ALL SELECT nama_bu FROM KTA UNION ALL SELECT domisili FROM kta');
        // return view('kta.index')->with('kta', $slss);

    //     $duplicates = DB::table('kta')
    // ->select('npwp','nama_bu','nama_pemohon','domisili','email','nohp', DB::raw('COUNT(*) as `count`')
    // ->groupBy('npwp','nama_bu','nama_pemohon','domisili','email','nohp')
    // ->havingRaw('count', '>', 1)
    // ->get();

    // return view('kta.index')->with('dd', $duplicates);

        // $nb = DB::table('kta')->select("nama_bu");
        // $dm = DB::table('kta')->select("domisili");
        // $ssa = DB::table('kta')->select('npwp')->distinct()->unionAll($nb)->unionAll($dm)->get();
        // return view('kta.index')->with('kta', $ssa);

        // SELECT DISTINCT npwp FROM ( SELECT npwp FROM kta UNION ALL SELECT nama_bu FROM kta UNION ALL SELECT domisili FROM kta ) AS x



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('kta.create');
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

        return redirect('kta');
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

        $edit = KTA::find($id);
        if(!$edit){
        abort(404);
        }        
        return view('kta.edit')->with('edit', $edit);
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

        return redirect('kta');
        
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
