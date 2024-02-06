<?php

namespace App\Http\Controllers\User;

use App\Exports\UserExport;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportAndExportController
{
    public function fileImportExport()
    {
        return view('file-import');
    }

    public function fileImport(Request $request)
    {
        Excel::import(new UserImport(), $request->file('file')->store('temp'));
        return back();
    }

    public function fileExport()
    {
        return Excel::download(new UserExport(), 'users-collection.xlsx');
    }
}
