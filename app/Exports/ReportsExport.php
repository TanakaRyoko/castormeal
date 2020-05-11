<?php

namespace App\Exports;

use App\Report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Report::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'エラー№',
            '指図№',
            '荷受人コード',
            '荷受人名称',
            '拠点コード',
            '拠点名',
            '品名コード',
            '品名',
            '容量',
            '数量',
            '供給単価',
            '供給金額',
            '供給限月',
            '出荷年月日',
            '供給受渡条件',
            '受入受渡条件',
            '次別',
            '出報№',
            '在庫区分',
            '本船№',
            '山元',
            '出報受付年月日',
            '接続元コード',
            'エラー№',
            'エラーメッセージ',
            'created_at',
            'updated_at',
        ];
    }
}
