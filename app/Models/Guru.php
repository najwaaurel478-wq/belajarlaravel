<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
   protected $table = 'guru';

    protected $fillable = [
        'nip',
        'nama',
        'alamat',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telp',
        'email',
        'foto',

    ];
}
