<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
   
    public function headings(): array{
        return [
            "ID", 
            "Nama",
            "NISN",
            "Tanggal lahir",
            "Kelas",
            "Status Lulus",
            "Tipe User"
        ];
    }
    public function map($value): array{
    
        return [
            $value->id,
            $value->nama,    
            $value->nisn,    
            $value->tanggal_lahir,    
            $value->kelas,    
            $value->status_lulus_type,    
            $value->user_type,    
        ];
    }
    public function collection()
    {
        $remove_pagination = 1;
        return User::getRecord($remove_pagination);
    }
}
