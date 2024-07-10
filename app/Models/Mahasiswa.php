<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    public static function getAllMahasiswa()
    {
        $data = Mahasiswa::select('*')->get();

        return $data;
    }
}