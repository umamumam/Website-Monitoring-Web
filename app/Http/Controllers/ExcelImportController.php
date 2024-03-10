<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);

        $file = $request->file('file');

        Excel::import(new DataImport, $file);

        return redirect()->back()->with('success', 'Data berhasil diimpor.');
    }
}
