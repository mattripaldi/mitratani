<?php

namespace App\Http\Controllers;
use App\Exports\pendahuluanExport;
use App\Exports\faseberbungaExport;
use App\Exports\fasemasakExport;
use App\Exports\fasevegetatifExport;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class cetakExcelController extends Controller
{
    public function pendahuluan($id)
    {
        return Excel::download(new pendahuluanExport($id), 'pendahuluan.xlsx');
    }

    public function vegetatif($id)
    {
        return Excel::download(new fasevegetatifExport($id), 'fasevegetatif.xlsx');
    }

    public function masak($id)
    {
        return Excel::download(new fasemasakExport($id), 'fasemasak.xlsx');
    }

    public function berbunga($id)
    {
        return Excel::download(new faseberbungaExport($id), 'faseberbunga.xlsx');
    }

}
