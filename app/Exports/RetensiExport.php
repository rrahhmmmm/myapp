<?php

namespace App\Exports;

use App\Models\M_retensi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RetensiExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return M_retensi::select([
            'JENIS_ARSIP',
            'BIDANG_ARSIP',
            'TIPE_ARSIP',
            'DETAIL_TIPE_ARSIP',
            'MASA_AKTIF',
            'MASA_INAKTIF',
            'KETERANGAN',
            'CREATE_BY'
        ])->get();
    }

    public function headings(): array
    {
        return [
            'JENIS ARSIP',
            'BIDANG ARSIP',
            'TIPE ARSIP',
            'DETAIL TIPE ARSIP',
            'MASA AKTIF',
            'MASA INAKTIF',
            'KETERANGAN',
            'DIBUAT OLEH'
        ];
    }
}
