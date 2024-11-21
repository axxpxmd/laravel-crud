@extends('layouts.app')
@section('content')
@include('layouts.alerts')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('mahasiswa.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Mahasiswa" required>
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
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
