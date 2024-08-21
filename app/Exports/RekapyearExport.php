<?php

namespace App\Exports;

use App\Models\Rekap;
use Maatwebsite\Excel\Concerns\FromCollection;

class RekapyearExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rekap::all();
    }
}
