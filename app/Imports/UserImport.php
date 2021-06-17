<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'email' => $row[1],
            'phone' => $row[2],
            'community_id'=> $row[3],
            'role' => $row[4],
            'password' => $row[5],
        ]);
    }
}
