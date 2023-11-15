<?php

namespace App\Exports;

use App\Models\Egresados;
use Maatwebsite\Excel\Concerns\FromCollection;

class EgresadosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Egresados::all();
    }
}
