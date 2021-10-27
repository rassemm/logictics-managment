<?php

namespace App\Exports;

use App\Benne;
use Maatwebsite\Excel\Concerns\FromCollection;

class BenneExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Benne::all();
    }
}
