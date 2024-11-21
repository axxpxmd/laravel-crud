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
        // $data = Mahasiswa::select('*')
        //     ->join('mahasiswa_detail', 'mahasiswa_detail.mahasiswa_id', '=', 'mahasiswa.id')
        //     ->get();

        $data = Mahasiswa::select('*')->get();

        return $data;
    }

    // get mahasiswa by ID
    public static function getMahasiswaById($id)
    {
        $data = Mahasiswa::find($id);

        return $data;
    }

    public function mahasiswaDetail()
    {
        return $this->hasOne(MahasiswaDetail::class, 'mahasiswa_id', 'id');
    }
}
