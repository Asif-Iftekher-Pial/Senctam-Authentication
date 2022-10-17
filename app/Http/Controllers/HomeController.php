<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;
use App\Exports\UserDataExport;
use App\Imports\UserDataImport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function home(){
        $userData=UserData::orderBy('id','desc')->paginate('20');
        // dd($userData);
        return view('welcome',compact('userData'));
    }

    // upload and download files
    public function export() 
    {
        return Excel::download(new UserDataExport, 'usersData.xlsx');
    }

    // download
    public function import(Request $request) 
    {

        Excel::import(new UserDataImport, $request->file('upload_file') );
        
        return redirect('/')->with('success','Data imported successfully!');
    }
}
