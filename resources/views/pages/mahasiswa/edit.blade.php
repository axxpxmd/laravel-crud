@extends('layouts.app')
@section('content')
@include('layouts.alerts')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('mahasiswa.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" id="nama" placeholder="Nama Mahasiswa" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">NIM</label>
                <input type="number" class="form-control" value="{{ $data->nim }}" name="nim" id="nim" placeholder="Nama NIM" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kelamin</label>
                <select class="form-control" id="kelamin" name="kelamin" required>
                    <option value="">Pilih</option>
                    <option value="Laki - Laki" {{ $data->kelamin == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
                    <option value="Perempuan" {{ $data->kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
