<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\KTAExport;

class ExcelController extends Controller
{
    public function laporanExcel()
{
    return (new KTAExport)->download('kta.xlsx');
}
}
