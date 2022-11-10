<?php

namespace App\Exports;

use App\Models\Security;
use Maatwebsite\Excel\Concerns\FromCollection;

class SecurityExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Security::all();
    }
}
