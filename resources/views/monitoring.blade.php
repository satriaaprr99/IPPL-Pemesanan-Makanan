@extends('layouts.landing_admin_layout')
@section('title', 'Monitoring')
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
                                <table id="example" class="table table-striped data-table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Pemesan</th>
                                            <th>No Meja</th>
                                            <th>Pembayaran</th>
                                            <th>Status</th>
                                            <th>Total Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>####</td>
                                            <td>Hafiizh</td>
                                            <td>001</td>
                                            <td>Cash</td>
                                            <td>Sedang Dimasak</td>
                                            <td>Rp.950.000</td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>####</td>
                                            <td>Hafidz</td>
                                            <td>005</td>
                                            <td>BCA</td>
                                            <td>Belum Dimasak</td>
                                            <td>Rp.150.000</td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>####</td>
                                            <td>Fadlul</td>
                                            <td>003</td>
                                            <td>Cash</td>
                                            <td>Sudah Selesai</td>
                                            <td>Rp.250.000</td>
                                        </tr>
                                        <tr>
                                            <td>004</td>
                                            <td>####</td>
                                            <td>Herbert</td>
                                            <td>002</td>
                                            <td>Cash</td>
                                            <td>Sedang Dimasak</td>
                                            <td>Rp.120.000</td>
                                        </tr>
                                        <tr>
                                            <td>005</td>
                                            <td>####</td>
                                            <td>Rosa</td>
                                            <td>010</td>
                                            <td>DANA</td>
                                            <td>Sedang Dimasak</td>
                                            <td>Rp.350.000</td>
                                        </tr>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Aksi</th>
                                            <th>Pemesan</th>
                                            <th>No Meja</th>
                                            <th>Pembayaran</th>
                                            <th>Status</th>
                                            <th>Total Harga</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection