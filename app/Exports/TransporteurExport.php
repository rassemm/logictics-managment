<?php

namespace App\Exports;

use App\Transporteur;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransporteurExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transporteur::all();
    }
}
