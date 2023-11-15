<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EgresadosExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function pageExport()
    {
        return view('exportXLSX.exportCSV');
    }

    public function export()
    {
        return Excel::download(new EgresadosExport, 'egresados.xlsx');
    }
}
