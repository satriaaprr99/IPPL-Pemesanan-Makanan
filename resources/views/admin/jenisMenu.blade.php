@extends('layouts.landing_admin_layout')
@section('title', 'Dashboard')
@section('daftarMenu', 'active')
@section('collapse', 'collapse')
@push('css')
<style>
    .hoverrable {
        cursor: pointer;
        transition: .3s all ease;
    }

    .hoverrable.active {
        background-color: antiquewhite;
    }

    .hoverrable:hover {
        background-color: antiquewhite;
    }
</style>
@endpush
@section('content')
<main class="mt-5 pt-4">
    <div class="container-fluid">
        <div class="row align-items-center text-center justify-content-center">
            <div class="card col-5 hoverrable mx-2">
                <a href="{{route('pengelola.cms.menu')}}" class="text-decoration-none text-dark" id="to_jenis_menu">
                    <div class="card-body">
                        <h6>Daftar Menu</h6>
                    </div>
                </a>
            </div>
            <div class="card col-5 hoverrable mx-2 active">
                <a href="{{route('pengelola.cms.jenis-menu')}}" class="text-decoration-none text-dark" id="to_jenis_menu">
                    <div class="card-body">
                        <h6>Jenis Menu</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <button type="button" class="btn btn-outline-danger ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Jenis Menu</button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3 pt-3" id="form-menu">
                <table class="table" id="table-menu">
                    <thead class="table" style="background-color: #e7272d; color: whitesmoke;">
                        <tr>
                            <th>No</th>
                            <th>Aksi</th>
                            <th class="text-center">Nama Jenis Menu</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('pengelola.cms.jenis-menu.storeUpdate')}}" id="createJenisMenu" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="jenis_menu" class="col-form-label">Nama Jenis Menu:</label>
                                        <input type="text" class="form-control" id="jenis_menu" name="jenis_menu">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" onclick="$('#createJenisMenu').submit()" class="btn btn-primary">Tambah</button>
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
                                <form action="{{route('pengelola.cms.jenis-menu.storeUpdate')}}" method="post" id="formEdit"">
                                    @csrf
                                    <input type="hidden" name="id" id="id_edit">

                                    <div class="mb-3">
                                        <label for="jenis_menu" class="col-form-label">Nama Jenis Menu:</label>
                                        <input type="text" class="form-control" id="jenis_menu_edit" name="jenis_menu">
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
            </div>
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
    function edit(id, jenis_menu) {
        $('#id_edit').val(id)
        $('#jenis_menu_edit').val(jenis_menu)
        $('#editModal').modal('show');
    }
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
                $('#form-delete').attr('action', "{{url('pengelola/media-promotion/jenis-menu/delete')}}" + "/" + id);
                $('#form-delete').submit();
            }
        })

    }
</script>
<script>
        $(document).ready(function() {
            var table;
            table = $('#table-menu').DataTable({
                "responsive": true,
                "fixedHeader": true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{route('pengelola.cms.jenis-menu.ajax')}}",
                    "type": "POST",
                    "data": function(d) {
                        d._token = "{{csrf_token()}}"
                    },
                },
                "columns": [{
                        "data": "DT_RowIndex",
                        "name": "DT_RowIndex",
                        "className": "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        "data": "aksi",
                        "name": "aksi",
                        "className": "text-center",
                        orderable: false
                    },
                    {
                        "data": "jenis_menu",
                        "name": "jenis_menu",
                        "className": "text-center",
                    },
                ]
            });
        });
    
</script>
@endpush