<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\DateExport;

class DateExport implements FromCollection
{
    use Exportable;

    public function collection()
    {
        return collect(
            [
                0 => [
                    range(1, 31)
                ]
            ]
        );
    }
}