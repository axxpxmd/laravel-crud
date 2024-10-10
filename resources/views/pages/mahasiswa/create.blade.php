@extends('layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </div>
    <div class="card-body">
        <form action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" name="mahasiswa" id="mahasiswa" placeholder="Nama Mahasiswa" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">NIM</label>
                <input type="number" class="form-control" name="nim" id="nim" placeholder="Nama NIM" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kelamin</label>
                <select class="form-control" id="kelamin" name="kelamin" required>
                    <option value="">Pilih</option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
