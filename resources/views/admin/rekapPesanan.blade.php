@extends('layouts.landing_admin_layout')
@section('title', 'Pesanan Masuk')
@section('rekapPesanan', 'active')
@section('collapseWaiters', 'collapse')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="bi bi-table me-2"></i></span> Pesanan Masuk
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_pesanan" class="table table-striped" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 68px">No</th>
                                            <th>Aksi</th>
                                            <th>Kode</th>
                                            <th>Pemesan</th>
                                            <th>No Meja</th>
                                            <th>Pembayaran</th>
                                            <th>Status</th>
                                            <th>Total Harga</th>
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
    <div class="modal fade" id="detailPesanan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailPesananTitle">Detail Pesanan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="info_pemesan" class="table">
                    
                </table>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Jenis Menu</th>
                            <th>Nama Menu</th>
                            <th>Qty</th>
                            <th>Harga Satuan</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody id="detail_pesanan_row"></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <form action="{{route('pengelola.pesanan.masuk.proses')}}" method="post" id="form_change_status">
                    @csrf
                    <input type="hidden" name="status" id="change_status_order">
                    <input type="hidden" name="id_pesanan" id="id_pesanan">
                    <div id="btn-container">
                        
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function(){
            var table;
            table = $('#table_pesanan').DataTable({
                "responsive": true,
                "fixedHeader": true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{route('pengelola.pesanan.rekap.ajax')}}",
                    "type": "POST",
                    "data": function (d) {
                        d._token = "{{csrf_token()}}"
                    },
                },
                "columns": [
                    {"data": "DT_RowIndex", "name": "DT_RowIndex", "className": "text-center", orderable: false},
                    {"data": "aksi", "name": "aksi", "className": "text-center",orderable: false},
                    {"data": "kode_pesanan", "name": "kode_pesanan", "className": "text-center", render: function(data){
                        return "<div class='badge bg-warning'>"+data+"</div>"
                    }},
                    {"data": "nama_pemesan", "name": "nama_pemesan", "className": "text-center",},
                    {"data": "no_meja", "name": "no_meja", "className": "text-center",},
                    {"data": "jenis_pembayaran", "name": "jenis_pembayaran", "className": "text-center",},
                    {"data": "status", "name": "status", "className": "text-center", render: function(data){
                        var color = '';
                        switch(data){
                            case 'Diorder':
                                color = 'danger'
                            break;
                            case 'Dimasak':
                                color = 'warning'
                            break;
                            case 'Diantar':
                                color = 'primary'
                            break;
                            case 'Selesai':
                                color = 'success'
                            break;
                        }

                        return `<div class="badge bg-${color}">${data}</div>`
                    }},
                    {"data": "total_pembayaran", "name": "total_pembayaran", "className": "text-center", render: function(data){
                        return 'Rp'+data.toLocaleString('id')
                    }},
                ]
            });
        });
    </script>
    <script>
        function detailPesanan(id){
            $.get("{{url('pengelola/pesanan/detail')}}"+"/"+id, function(data, status){
                $('#detail_pesanan_row').html('')
                $('#info_pemesan').html(`
                    <tr>
                        <td>Meja</td>
                        <td>:</td>
                        <td id="no_meja">${data.no_meja}</td>
                    </tr>
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>:</td>
                        <td id="nama_pemesan">${data.nama_pemesan}</td>
                    </tr>
                    <tr>
                        <td>Jenis Pembayaran</td>
                        <td>:</td>
                        <td id="jenis_pembayaran">${data.jenis_pembayaran}</td>
                    </tr>
                    <tr>
                        <td>Kode Pesanan</td>
                        <td>:</td>
                        <td id="kode_pesanan"><div class="badge bg-warning">${data.kode_pesanan}</div></td>
                    </tr>
                `)
                if(data.status != 'Diorder'){
                    $('#info_pemesan').append(`
                        <tr>
                            <td>Cetak Struk</td>
                            <td>:</td>
                            <td>
                                <a href="{{url('pengelola/pesananMasuk/cetak-struk')}}/${data.id}" target="_blank" class="btn btn-sm btn-info bg-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"/></svg>
                                </a>
                            </td>
                        </tr>
                    `)
                }
                
                var total = 0;
                data.detail.forEach(element => {
                    total += element.qty * element.harga_satuan
                    $('#detail_pesanan_row').append(`
                        <tr>
                            <td>${element.jenis_menu}</td>
                            <td>${element.nama_menu}</td>
                            <td>${element.qty}</td>
                            <td>${'Rp'+element.harga_satuan.toLocaleString('id')}</td>
                            <td>${'Rp'+(element.harga_satuan * element.qty).toLocaleString('id')}</td>
                        </tr>
                    `)
                });
                $('#detail_pesanan_row').append(`
                    <tr>
                        <td colspan="4">Total</td>
                        <td>Rp${total.toLocaleString('id')}</td>
                    </tr>
                `)
                switch(data.status){
                    case 'Diorder':
                        $('#change_status_order').val('Dimasak')
                        $('#btn-container').html(`<button type="submit" class="btn btn-primary" id="btn_proses">Proses Pesanan</button>`)
                    break;
                    case 'Dimasak':
                        $('#change_status_order').val('Diantar')
                        $('#btn-container').html(`<button type="button" class="btn btn-primary" onclick="confirmSwal(${data.id})">Antar Pesanan</button>`)
                    break;
                    // case 'Diantar':
                    //     $('#change_status_order').val()
                    // break;
                }
                $('#id_pesanan').val(data.id)
                $('#detailPesanan').modal('show')
            });
        }
    </script>
@endpush