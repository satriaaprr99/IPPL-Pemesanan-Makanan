@extends('layouts.landing_admin_layout')
@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('collapseWaiters', 'collapse')
@section('collapsePesan', 'collapse')
@section('content')
    <main class="mt-5 pt-3">
        @if (Auth::user()->role_id == 1)
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 pt-3 text-center">
                        <h4>
                            Daftar Menu Terfavorit
                        </h4>
                    </div>
                </div>

                <div class="row">
                    @foreach ($menuFavorit as $item)
                        <div class="col-md-6 mb-3 text-center">
                            <div class="card bg" style="background-color: #e7272d; color: white;">
                                <div class="card-title">
                                    <h3 class="mt-1 mb-0">{{$item['jenis_menu']}}</h3>
                                </div>
                                <img class="card-img-top" src="{{Storage::url($item['menu_info']['foto_menu'])}}" alt="Img Menu" style="width: 100%; height:300px; object-fit:cover;object-position:center;">
                                <div class="card-body">
                                    <p class="card-text">Nama Menu : {{$item['menu_info']['nama_menu']}}</p>
                                    <p class="card-text">Harga : Rp{{number_format($item['menu_info']['harga'], 0, ',', '.')}}</p>
                                    <p class="card-text">Jumlah Pemesan : {{$item['menu_info']['jumlah_pesanan']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if (count($menuFavorit) <= 0)
                        <h5 class="text-center my-5">Data menu terfavorit belum tersedia</h5>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card bg-light h-100" style="color: black;">
                            <div class="card-body py-5 text-center">
                                <p class="card-text">Total Keuangan Masuk Bulan {{Carbon\Carbon::now()->translatedFormat('F Y')}}</p>
                                <h4>Rp. {{number_format($counterKeunangan, 0, ',', '.')}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card text-white h-100" style="background-color: #e7272d;">
                        <div class="card-body py-5 text-center">
                                <p class="card-text">Jumlah Orderan Masuk Bulan {{Carbon\Carbon::now()->translatedFormat('F Y')}}</p>
                                <h4>{{number_format($counterPesanan, 0, ',', '.')}}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-light h-100" style="color: black;">
                        <div class="card-body py-5 text-center">
                                <p class="card-text">Total Pesan Masuk</p>
                                <h4>{{number_format($counterPesan, 0, ',', '.')}} Pesanan</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                                Total Rata Rata Pesanan Masuk Perbulan : 
                                <span class="text-success" id="rata_rata"></span>
                            </div>
                            <div class="card-body">
                                <div id="chart_pesanan"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(Auth::user()->role_id == 4)
        <div class="container">
            <div class="row">
                <div class="col">
                    <center>
                        <img src="{{asset('img/logo.png')}}" alt="">
                    </center>
                    <h3 class="text-center">E-Resto Waiters Task-List</h3>
                    <br><br>
                </div>
            </div>
            <table class="table table-striped" id="table-task">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>No Pesanan</th>
                        <th>Nama Pemesan</th>
                        <th>No Meja</th>
                        <th>Jenis Pembayaran</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <center>
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </center>
                        <h3 class="text-center">Selamat Datang {{Auth::user()->name}}</h3>
                        <br><br>
                        <center>
                            <img src="{{asset('img/welcome.svg')}}" alt="" style="width: 40%;">
                        </center>
                    </div>
                </div>
            </div>
        @endif
    </main>

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
          series: [{
          name: "Total Pesanan Masuk",
          data: [],
        }],
          chart: {
          type: 'bar',
          height: 380
        },
        xaxis: {
          type: 'category',
        },
        tooltip: {
          x: {
            formatter: function(val) {
              return val
            }  
          }
        },
        };
        var chart = new ApexCharts(document.querySelector("#chart_pesanan"), options);
        chart.render();
</script>
<script>
    $.ajax({
        method: "POST",
        url: "{{route('pengelola.dashboard.rekap.chart')}}",
        data: {_token: "{{csrf_token()}}"},
        success: function(res){
            var data = [];
            var rata_rata = 0;
            res.forEach(function(element, index) {
                data.push({'x':element.bulan, 'y':element.total})
                rata_rata += element.total;
            });
           chart.updateSeries([{name: "Total Pesanan Masuk", data: data}])
           $('#rata_rata').html(rata_rata);
        },
        error: function(res){
            console.log(res)
        }

    })
</script>
<script>
     $(document).ready(function() {
            var table;
            table = $('#table-task').DataTable({
                "responsive": true,
                "fixedHeader": true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{route('pengelola.task-waiters')}}",
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
                        "data": "no_pesanan",
                        "name": "no_pesanan",
                        "className": "text-center",
                    },
                    {
                        "data": "nama_pemesan",
                        "name": "nama_pemesan",
                        "className": "text-center",
                    },
                    {
                        "data": "no_meja",
                        "name": "no_meja",
                        "className": "text-center",
                    },
                    
                    {
                        "data": "jenis_pembayaran",
                        "name": "jenis_pembayaran",
                        "className": "text-center",
                    },
                ]
            });
            window.setInterval(() => {
                table.ajax.reload();
            }, 5000);
        });
</script>
@endpush
