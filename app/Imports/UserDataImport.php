<?php

namespace App\Imports;

use App\Models\UserData;
use Maatwebsite\Excel\Concerns\ToModel;

class UserDataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserData([
            //
            'first'=> $row[1],
            'last'=> $row[2], 
            'email'=> $row[3],
        ]);
    }
}
