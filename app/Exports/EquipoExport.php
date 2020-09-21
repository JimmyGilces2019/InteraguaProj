<?php

namespace App\Exports;

use App\TBL_EQUIPO;
use Maatwebsite\Excel\Concerns\FromCollection;

class EquipoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TBL_EQUIPO::all();
    }
}
