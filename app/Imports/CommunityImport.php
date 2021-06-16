<?php

namespace App\Imports;

use App\Community;
use Maatwebsite\Excel\Concerns\ToModel;

class CommunityImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Community([
            'name' => $row[0],
            'description' => $row[1],
            'phone' => $row[2],
        ]);
    }
}
