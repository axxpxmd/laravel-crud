@extends('layouts.app')
@section('content')
@include('layouts.alerts')
<a class="btn btn-primary mb-2" href="{{ route('mahasiswa.create') }}">Tambah</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kelamin</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i)
                    <tr>
                        <td>{{ $i->id }}</td>
                        <td>{{ $i->nama }}</td>
                        <td>{{ $i->nim }}</td>
                        <td>{{ $i->kelamin }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $i->id) }}">Edit</a>
                            <a href="#" onclick="remove('{{ $i->id }}')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    function remove(id){
        Swal.fire({
            title: "YAKIN ?",
            text: "Apakah anda yakin ingin menhapus data ini ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // process delete
                $.ajax({
                    url: "{{ route('mahasiswa.delete', ':id') }}".replace(':id', id),
                    type: "DELETE",
                    cache: false,
                    data: {
                        "_token":  "{{ csrf_token() }}"
                    },
                    success:function(response){
                        Swal.fire({
                            title: "Deleted!",
                            text: response.message,
                            icon: "success"
                        });
                        location.reload();
                    }
                });
            }
        });
    }
</script>
