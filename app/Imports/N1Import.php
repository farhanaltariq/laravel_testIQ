<?php

namespace App\Imports;

use App\Models\N1;
use Maatwebsite\Excel\Concerns\ToModel;

class N1Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new N1([
            'nama' => $row[0],
            'tgl_lahir' => $row[1],
            'jenis_kelamin' => $row[2],
            'alamat' => $row[3],
            'ans1' => $row[10],
            'ans2' => $row[11],
            'ans3' => $row[12],
            'ans4' => $row[13],
            'ans5' => $row[14],
            'ans6' => $row[15],
            'ans7' => $row[16],
            'ans8' => $row[17],
            'ans9' => $row[18],
            'ans10' => $row[19],
            'ans11' => $row[20],
            'ans12' => $row[21],
            'ans13' => $row[22],
            'ans14' => $row[23],
            'ans15' => $row[24],
            'ans16' => $row[25],
            'ans17' => $row[26],
            'ans18' => $row[27],
            'ans19' => $row[28],
            'ans20' => $row[29],
            'ans21' => $row[30],
            'ans22' => $row[31],
            'ans23' => $row[32],
            'ans24' => $row[33],
            'ans25' => $row[34],
        ]);
    }
}
