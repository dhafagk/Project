<?php

namespace App\Exports;

use App\KTA;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KTAExport implements FromView
{
    public function view(): View
    {
        return view('exports.kta', [
            'kta' => KTA::all()
        ]);
    }
}
