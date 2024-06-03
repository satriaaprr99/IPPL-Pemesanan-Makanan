@extends('layouts.landing_admin_layout')
@section('title', 'Data Waiters')
@section('daftarWaiters', 'active')
@section('collapsePesan', 'collapse')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        
        <div class="d-flex justify-content-end my-4">
            <button type="button" class="btn btn-outline-danger ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Waiters</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Waiters</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('pengelola.daftarWaiters.storeUpdate')}}" id="createWaiters" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="col-form-label">Nama Waiters:</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="col-form-label">NIK:</label>
                                    <input type="text" class="form-control" id="nik" name="nik">
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="col-form-label">Nomor Telepon:</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-table me-2"></i></span> Data Waiters
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="table_monitoring">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>NIK</th>
                                        <th>Nama Waiters</th>
                                        <th>No Telp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Waiters</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{route('pengelola.daftarWaiters.storeUpdate')}}" method="post" id="formEdit"">
                                        <div class="modal-body">
                                                @csrf
                                                <input type="hidden" name="id" id="id_edit">
                                                <div class="mb-3">
                                                    <label for="nama_lengkap" class="col-form-label">Nama Waiters:</label>
                                                    <input type="text" class="form-control" id="nama_lengkap_edit" name="nama_lengkap">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nik" class="col-form-label">NIK:</label>
                                                    <input type="text" class="form-control" id="nik_edit" name="nik">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_telp" class="col-form-label">Nomor Telepon:</label>
                                                    <input type="text" class="form-control" id="no_telp_edit" name="no_telp">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <button type="button" class="btn btn-outline-danger ms-auto" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@mdo">Edit</button>
        </div>
    </div>
</main>
<form action="" method="post" id="form-delete">
    @csrf
    @method('DELETE')
</form>
@endsection
@push('js')
<script>
    function edit(id) {
        $.get("{{url('pengelola/daftarWaiters/show')}}" + "/" + id, function(data, status) {
            if (data.status == 'success') {
                $('#id_edit').val(id)
                $('#nama_lengkap_edit').val(data.data.nama_lengkap)
                $('#nik_edit').val(data.data.nik).change()
                $('#no_telp_edit').val(data.data.no_telp)
                $('#editModal').modal('show')
            } else {
                Swal.fire(
                    'Maaf',
                    data.data,
                    'error'
                )
            }
        });
    }
</script>
<script>
    $(document).ready(function() {
        var table;
        table = $('#table_monitoring').DataTable({
            "responsive": true,
            "fixedHeader": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{route('pengelola.daftarWaiters.ajax')}}",
                "type": "POST",
                "data": function(d) {
                    d._token = "{{csrf_token()}}"
                },
            },
            "columns": [{
                    "data": "DT_RowIndex",
                    "name": "DT_RowIndex",
                    "className": "text-center",
                    orderable: false
                },
                {
                    "data": "aksi",
                    "name": "aksi",
                    "className": "text-center",
                    orderable: false
                },
                {
                    "data": "nik",
                    "name": "nik",
                    "className": "text-center",
                },
                {
                    "data": "nama_lengkap",
                    "name": "nama_lengkap",
                    "className": "text-center",
                },
                {
                    "data": "no_telp",
                    "name": "no_telp",
                    "className": "text-center",
                },
            ]
        });
    });
</script>
<script>
    function deleteData(id) {
        Swal.fire({
            title: 'Yakin Untuk Mengahapus Data?',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d63c44',
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form-delete').attr('action', "{{url('pengelola/daftarWaiters/delete')}}" + "/" + id);
                $('#form-delete').submit();
            }
        })

    }
</script>
@endpush