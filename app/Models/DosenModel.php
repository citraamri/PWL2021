<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    public function allData()
    {
        return [
        [
            'nip' => '1234',
            'nama' => 'Bambang',
            'matkul' => 'Fisika'
        ],
        [
            'nip' => '1235',
            'nama' => 'Budi',
            'matkul' => 'Kimia'
        ],
        [
            'nip' => '1236',
            'nama' => 'Siti',
            'matkul' => 'Biologi'
        ]
        ];
    }
}
