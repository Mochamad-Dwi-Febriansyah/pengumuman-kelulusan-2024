<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash; 

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new User([
            'nama' => $row[1],
            'nisn' => $row[2],
            'password' => Hash::make($row[3]),
            'tanggal_lahir' => $row[4],
            'kelas' => $row[5],
            'status_lulus_type' => $row[6],
            'user_type' => $row[7],
        ]);
    }
}
