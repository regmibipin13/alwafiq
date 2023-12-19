<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;

class AssetsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // return new Asset([
        //     'object_id' => $row[0],
        //     'location' => $row[1]
        // ]);
    }
}
