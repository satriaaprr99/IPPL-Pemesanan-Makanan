@extends('layouts.landing_admin_layout')
@section('title', 'Monitoring')
@section('pesanMasuk', 'active')
@section('collapseWaiters', 'collapse')
@section('collapsePesan', 'collapse')
@section('content')
    <main class="mt-5 pt-4">
      <div class="container-fluid">
        <div class="row align-items-center text-center">
          <div class="col-md-12">
            <h4>Pesan Masuk</h4>
          </div>
        </div>
      </div>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-3 pt-3">
            <table class="table table-bordered" id="tbl-contact">
              <thead class="table" style="background-color: #e7272d; color: whitesmoke;">
                <tr>
                  <th width="">No</th>
                  <th width="20%">Pengirim</th>
                  <th class="text-center">E-mail</th>
                  <th class="text-center">Isi Pesan</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
@endsection
@push('js')
    <script>
      var table;
            table = $('#tbl-contact').DataTable({
                "responsive": true,
                "fixedHeader": true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{route('pengelola.pesanMasuk.ajax')}}",
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
                        "data": "nama",
                        "name": "nama",
                        "className": "text-center",
                    },
                    {
                        "data": "email",
                        "name": "email",
                        "className": "text-center",
                    },
                    {
                        "data": "pesan",
                        "name": "pesan",
                        "className": "text-center",
                    },
                ]
            });
    </script>
@endpush