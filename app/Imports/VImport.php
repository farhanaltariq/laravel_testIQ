<?php

namespace App\Imports;

use App\Models\V;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class VImport implements ToModel, WithStartRow
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
        return new V([
            // dd(gettype($row[3])),
            'created_at' => Date::excelToDateTimeObject($row[0])->format('Y-m-d h:i:s'),
            'nama' => $row[2],
            'tgl_lahir' => gettype($row[3]) == 'double' || gettype($row[3]) == 'integer' ? Date::excelToDateTimeObject($row[3])->format('m/d/Y') : $row[3],
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
            'ans26' => $row[31],
            'ans27' => $row[32],
            'ans28' => $row[33],
            'ans29' => $row[34],
            'ans30' => $row[35],
            'ans31' => $row[36],
            'ans32' => $row[37],
            'ans33' => $row[38],
            'ans34' => $row[39],
            'ans35' => $row[40],
            'ans36' => $row[41],
            'ans37' => $row[42],
            'ans38' => $row[43],
            'ans39' => $row[44],
            'ans40' => $row[45],
            'ans41' => $row[46],
            'ans42' => $row[47],
            'ans43' => $row[48],
            'ans44' => $row[49],
            'ans45' => $row[50],
            'ans46' => $row[51],
            'ans47' => $row[52],
            'ans48' => $row[53],
            'ans49' => $row[54],
            'ans50' => $row[55],
            'ans51' => $row[56],
            'ans52' => $row[57],
            'ans53' => $row[58],
            'ans54' => $row[59],
            'ans55' => $row[60],
            'ans56' => $row[61],
            'ans57' => $row[63],
            'ans58' => $row[63],
            'ans59' => $row[64],
            'ans60' => $row[65],
            'ans61' => $row[66],
            'ans62' => $row[67],
            'ans63' => $row[68],
            'ans64' => $row[69],
            'ans65' => $row[70],
            'ans66' => $row[71],
            'ans67' => $row[72],
            'ans68' => $row[73],
            'ans69' => $row[74],
            'ans70' => $row[75],
            'ans71' => $row[76],
            'ans72' => $row[77],
            'ans73' => $row[78],
            'ans74' => $row[79],
            'ans75' => $row[80],
            'ans76' => $row[81],
            'ans77' => $row[82],
            'ans78' => $row[83],
            'ans79' => $row[84],
            'ans80' => $row[85],
            'ans81' => $row[86],
            'ans82' => $row[87],
            'ans83' => $row[88],
            'ans84' => $row[89],
            'ans85' => $row[90],
            'ans86' => $row[91],
            'ans87' => $row[92],
            'ans88' => $row[93],
            'ans89' => $row[94],
            'ans90' => $row[95],
            'ans91' => $row[96],
            'ans92' => $row[97],
            'ans93' => $row[98],
            'ans94' => $row[99],
            'ans95' => $row[100],
            'ans96' => $row[101],
            'ans97' => $row[102],
            'ans98' => $row[103],
            'ans99' => $row[104],
            'ans100' => $row[105],
        ]);
    }
}
