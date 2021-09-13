<?php

namespace App\Http\Controllers;
use App\Exports\pendahuluanExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class cetakExcelController extends Controller
{
    public function pendahuluan($id)
    {
        return Excel::download(new pendahuluanExport($id), 'pendahuluan.xlsx');
    }
}
