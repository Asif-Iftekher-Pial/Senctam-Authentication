<?php

namespace App\Exports;

use App\Models\UserData;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserDataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UserData::all();
    }
}
