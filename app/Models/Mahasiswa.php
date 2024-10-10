<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['id', 'nama', 'nim', 'kelamin'];

    // Query get all data
    public static function getAllMahasiswa()
    {
        $data = Mahasiswa::select('*')->get();

        return $data;
    }

    // get mahasiswa by ID
    public static function getMahasiswaById($id)
    {
        $data = Mahasiswa::find($id);

        return $data;
    }
}
