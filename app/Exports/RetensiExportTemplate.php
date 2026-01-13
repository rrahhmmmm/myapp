<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class RetensiExportTemplate implements WithHeadings,ShouldAutoSize
{
    
    public function headings(): array
    {
        return [
            'JENIS_ARSIP',
            'BIDANG_ARSIP',
            'TIPE_ARSIP',
            'DETAIL_TIPE ARSIP',
            'MASA_AKTIF',
            'DESKRIPSI_AKTIF',
            'MASA_INAKTIF',
            'DESKRIPSI_INAKTIF',
            'KETERANGAN'
        ];
    }
}
