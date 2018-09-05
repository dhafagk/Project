<?php

namespace App\Exports;

use App\KTA;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use DB;

class KTAExport implements FromView
{

	use Exportable;

    public function view(): View
    {
        return view('exports.kta', [
            'kta' => DB::table('kta')->groupBy('npwp')->get()->sortByDesc('id')
        ]);
    }
}
