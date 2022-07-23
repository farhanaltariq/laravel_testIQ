<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class N3 extends Model
{
    use HasFactory;
    protected $table = 'N3';
    protected $fillable = [
        'created_at',
        'nama',
        'tgl_lahir',
        'ruang_kelas',
        'pil_jurusan',
        'jenis_kelamin',
        'alamat',
        'ans1',
        'ans2',
        'ans3',
        'ans4',
        'ans5',
        'ans6',
        'ans7',
        'ans8',
        'ans9',
        'ans10',
        'ans11',
        'ans12',
        'ans13',
        'ans14',
        'ans15',
        'ans16',
        'ans17',
        'ans18',
        'ans19',
        'ans20',
    ];
}
