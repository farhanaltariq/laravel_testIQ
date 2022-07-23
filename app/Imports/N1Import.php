<?php

namespace App\Imports;

use App\Models\N1;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class N1Import implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        return new N1([
            // y-m-d with time
            'created_at' => Date::excelToDateTimeObject($row[0])->format('Y-m-d h:i:s'),
            'nama' => $row[2],
            'tgl_lahir' => gettype($row[3]) == 'double' ? Date::excelToDateTimeObject($row[3])->format('m/d/Y') : $row[3],
            'ruang_kelas' => $row[4],
            'pil_jurusan' => $row[5],
            'ans1' => $row[6],
            'ans2' => $row[7],
            'ans3' => $row[8],
            'ans4' => $row[9],
            'ans5' => $row[10],
            'ans6' => $row[11],
            'ans7' => $row[12],
            'ans8' => $row[13],
            'ans9' => $row[14],
            'ans10' => $row[15],
            'ans11' => $row[16],
            'ans12' => $row[17],
            'ans13' => $row[18],
            'ans14' => $row[19],
            'ans15' => $row[20],
            'ans16' => $row[21],
            'ans17' => $row[22],
            'ans18' => $row[23],
            'ans19' => $row[24],
            'ans20' => $row[25],
            'ans21' => $row[26],
            'ans22' => $row[27],
            'ans23' => $row[28],
            'ans24' => $row[29],
            'ans25' => $row[30],
        ]);
    }
}
