@extends('layouts.landing_admin_layout')
@section('title', 'Dashboard')
@section('daftarMenu', 'active')
@section('collapseWaiters', 'collapse')
@section('collapsePesan', 'collapse')
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
                <div class="card col-5 hoverrable mx-2 active">
                    <a href="{{route('pengelola.cms.menu')}}" class="text-decoration-none text-dark" id="to_jenis_menu">
                        <div class="card-body">
                            <h6>Daftar Menu</h6>
                        </div>
                    </a>
                </div>
                <div class="card col-5 hoverrable mx-2">
                    <a href="{{route('pengelola.cms.jenis-menu')}}" class="text-decoration-none text-dark" id="to_jenis_menu">
                        <div class="card-body">
                            <h6>Jenis Menu</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="button" class="btn btn-outline-danger ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Menu</button>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3 pt-3" id="form-menu">
                    <div class="table-responsive">
                        <table class="table table-responsive" id="table-menu">
                            <thead class="table" style="background-color: #e7272d; color: whitesmoke;">
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Aksi</th>
                                    <th style="width: 200px">Foto</th>
                                    <th>Nama Menu</th>
                                    <th>Jenis Menu</th>
                                    <th style="max-width: 300px">Deksipsi</th>
                                    <th class="text-center">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
    
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('pengelola.cms.menu.storeUpdate')}}" id="createMenu" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama_menu" class="col-form-label">Nama Menu:</label>
                                            <input type="text" class="form-control" id="nama_menu" name="nama_menu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis_menu" class="col-form-label">Jenis Menu:</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="jenis_menu" name="jenis_menu_id">
                                                    @foreach ($jenis_menu as $item)
                                                    <option value="{{$item->id}}">{{$item->jenis_menu}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="harga_menu" class="col-form-label">Harga Menu:</label>
                                            <input type="text" class="form-control" id="harga_menu" name="harga">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="col-form-label">Deskripsi:</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto_menu" class="col-form-label">Foto Menu:</label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" id="foto_menu" name="foto_menu">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" onclick="$('#createMenu').submit()" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pengelola.cms.menu.storeUpdate')}}" method="post" id="formEdit" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id_edit">

                        <div class="mb-3">
                            <label for="nama_menu" class="col-form-label">Nama Menu:</label>
                            <input type="text" class="form-control" id="nama_menu_edit" name="nama_menu">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_menu" class="col-form-label">Jenis Menu:</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="jenis_menu_edit" name="jenis_menu_id">
                                    @foreach ($jenis_menu as $item)
                                    <option value="{{$item->id}}">{{$item->jenis_menu}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="harga_menu" class="col-form-label">Harga Menu:</label>
                            <input type="text" class="form-control" id="harga_menu_edit" name="harga">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="col-form-label">Deskripsi:</label>
                            <textarea class="form-control" id="deskripsi_edit" name="deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto_menu" class="col-form-label">Foto Menu:</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="foto_menu_edit" name="foto_menu">
                            </div>
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
    function edit(id) {
        $.get("{{url('pengelola/media-promotion/menu/edit')}}" + "/" + id, function(data, status) {
            if (data.status == 'success') {
                $('#id_edit').val(id)
                $('#nama_menu_edit').val(data.data.nama_menu)
                $('#jenis_menu_edit').val(data.data.jenis_menu_id).change()
                $('#harga_menu_edit').val(data.data.harga)
                $('#deskripsi_edit').val(data.data.deskripsi)
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
    function deleteData(id) {
        Swal.fire({
            title: 'Yakin Untuk Mengahapus Data?',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d63c44',
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form-delete').attr('action', "{{url('pengelola/media-promotion/menu/delete')}}" + "/" + id);
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
                "url": "{{route('pengelola.cms.menu.ajax')}}",
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
                    "data": "foto_menu",
                    "name": "foto_menu",
                    "className": "text-center",
                    render: function(data) {
                        var data = `<img src="${window.location.origin}/storage/${data}" width="100%">`
                        return data
                    }
                },
                {
                    "data": "nama_menu",
                    "name": "nama_menu",
                    "className": "text-center",
                },
                {
                    "data": "jenis_menu",
                    "name": "jenis_menu",
                    "className": "text-center",
                },
                {
                    "data": "deskripsi",
                    "name": "deskripsi",
                    "className": "text-center",
                },
                {
                    "data": "harga",
                    "name": "harga",
                    "className": "text-center",
                    render: function(data){
                        return 'Rp'+data.toLocaleString('id')
                    }
                },
            ]
        });
    });
</script>
@endpush