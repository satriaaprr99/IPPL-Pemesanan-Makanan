@extends('layouts.landing_admin_layout')
@section('title', 'Data Meja')
@section('daftarMeja', 'active')
@section('collapseWaiters', 'collapse')
@section('collapsePesan', 'collapse')
@section('content')
    <main class="mt-5 pt-3 mb-3">
        <div class="d-flex justify-content-end mt-4 mb-3 mx-3">
            <button type="button" class="btn btn-outline-danger ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Jenis Menu</button>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="bi bi-table me-2"></i></span> Data Meja
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="table_meja">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>No Meja</th>
                                            <th>QR Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Meja</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pengelola.cms.daftar-meja.storeUpdate')}}" method="post" id="formCreate">
                        @csrf
                        <div class="mb-3">
                            <label for="no_meja" class="col-form-label">Nomor Meja:</label>
                            <input type="text" class="form-control" name="no_meja">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" onclick="$('#formCreate').submit()" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Jenis Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pengelola.cms.daftar-meja.storeUpdate')}}" method="post" id="formEdit"">
                        @csrf
                        <input type="hidden" name="id" id="id_edit">

                        <div class="mb-3">
                            <label for="no_meja" class="col-form-label">Nomor Meja:</label>
                            <input type="text" class="form-control" id="no_meja_edit" name="no_meja">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" onclick="$('#formEdit').submit()" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
<form action="" method="post" id="form-delete">
    @csrf
    @method('DELETE')
</form>
@endsection
@push('js')
<script>
    function deleteData(id) {
        Swal.fire({
            title: 'Yakin Untuk Mengahapus Data?',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d63c44',
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form-delete').attr('action', "{{url('pengelola/media-promotion/daftar-meja/delete')}}" + "/" + id);
                $('#form-delete').submit();
            }
        })

    }
</script>
<script>
    function edit(id, no_meja) {
        $('#id_edit').val(id)
        $('#no_meja_edit').val(no_meja)
        $('#editModal').modal('show');
    }
</script>
<script>
    $(document).ready(function(){
        var table;
        table = $('#table_meja').DataTable({
            "responsive": true,
            "fixedHeader": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{route('pengelola.cms.daftar-meja.ajax')}}",
                "type": "POST",
                "data": function (d) {
                    d._token = "{{csrf_token()}}"
                },
            },
            "columns": [
                {"data": "DT_RowIndex", "name": "DT_RowIndex", "className": "text-center", orderable: false},
                {"data": "aksi", "name": "aksi", "className": "text-center",orderable: false},
                {"data": "no_meja", "name": "no_meja", "className": "text-center",},
                {"data": "qr_code", "name": "qr_code", "className": "text-center",},
            ]
        });
    });
</script>
@endpush