<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelDownloadController extends Controller
{
    public function userDownload()
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }
}
