@extends('layouts.landing_admin_layout')
@section('title', 'Monitoring')
@section('monitoring', 'active')
@section('collapsePesan', 'collapse')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="bi bi-table me-2"></i></span> Monitoring Waiters
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="table_monitoring">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Nama Waiters</th>
                                            <th>Status</th>
                                            <th>Kode Pesanan</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Total Pembayaran</th>
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
    <form action="" method="post" id="form-confirm">
        @csrf
    </form>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        var table;
        table = $('#table_monitoring').DataTable({
            "responsive": true,
            "fixedHeader": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{route('pengelola.monitoring.ajax')}}",
                "type": "POST",
                "data": function (d) {
                    d._token = "{{csrf_token()}}"
                },
            },
            "columns": [
                {"data": "DT_RowIndex", "name": "DT_RowIndex", "className": "text-center", orderable: false, searchable: false},
                {"data": "aksi", "name": "aksi", "className": "text-center",orderable: false,searchable: false},
                {"data": "nama_lengkap", "name": "nama_lengkap", "className": "text-center",},
                {"data": "status", "name": "status", "className": "text-center",},
                {"data": "kode_pesanan", "name": "kode_pesanan", "className": "text-center", render: function(data){
                    return "<div class='badge bg-warning'>"+data+"</div>"
                }},
                {"data": "jenis_pembayaran", "name": "jenis_pembayaran", "className": "text-center",},
                {"data": "total_pembayaran", "name": "total_pembayaran", "className": "text-center", render: function(data){
                    return 'Rp'+data.toLocaleString('id')
                }},
            ]
        });
    });
</script>
<script>
    function confirmPesanan(id_status_waiters){
        $('#form-confirm').attr('action', "{{url('pengelola/monitoring/confirm')}}"+"/"+id_status_waiters);
        $('#form-confirm').submit()
    }
</script>
@endpush