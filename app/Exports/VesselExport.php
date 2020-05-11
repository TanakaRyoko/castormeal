<?php

namespace App\Exports;

use App\Vessel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VesselExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Vessel::all();
    }

    public function headings(): array
    {
        return [
            'id',
            '契約№',
            '商品',
            '船社',
            '揚港',
            '出航予定日',
            '本船名',
            'B/L DATE',
            '入港日',
            'コンテナ数',
            '本船№',
            '台帳№',
            '数量',
            'B/L NO.',
            '金額',
            '単価',
            'レート',
            '金利',
            '日本円',
            'バンクチャージ'
        ];
    }
}
