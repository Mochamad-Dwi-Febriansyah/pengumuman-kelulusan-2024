<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;

class AdminController extends Controller
{
    public function welcome(){
        $data['getRecord'] = User::getRecord(); 
        return view('admin/dashboard', $data);
    }
    public function export(){
        return Excel::download(new UsersExport,  'Siswa_'.date('d-m-Y').'.xls');
    }
    public function import(Request $request){ 
        Excel::import(new UsersImport, $request->file('userfile')); 
        return redirect('admin/dashboard')->with('success', 'All good!'); 
    }
}
