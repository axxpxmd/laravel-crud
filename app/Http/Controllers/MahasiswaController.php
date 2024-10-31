<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::getAllMahasiswa();

        return view('pages.mahasiswa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|numeric|unique:mahasiswa,nim,except,id',
            'kelamin' => 'required|in:Laki - Laki,Perempuan'
        ]);

        // get parameter
        $data = $request->all();

        // proces storing data
        Mahasiswa::create($data);

        return redirect()
            ->route('mahasiswa.index')
            ->withSuccess('Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Mahasiswa::getMahasiswaById($id);

        return view('pages.mahasiswa.edit', compact(
            'data'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|numeric|unique:mahasiswa,nim,' . $id,
            'kelamin' => 'required|in:Laki - Laki,Perempuan'
        ]);

        // get parameter
        $input = $request->all();

        $data  = Mahasiswa::findOrFail($id);
        $data->update($input);

        return redirect()
            ->route('mahasiswa.index')
            ->withSuccess('Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::destroy($id);

        return response()->json(['message' => "Berhasil menghapus data."]);
    }
}
