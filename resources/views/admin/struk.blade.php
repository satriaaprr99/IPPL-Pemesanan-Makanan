<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <center>
        <img src="img/logo.png" alt="" style="width: 40%">
        <p>Nota struk rincian pesanan</p>
    </center>
    <hr>
    <table id="info_pemesan" class="mb-3">
        <tr>
            <td>Meja</td>
            <td>:</td>
            <td id="no_meja">{{$data->no_meja}}</td>
        </tr>
        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td id="nama_pemesan">{{$data->nama_pemesan}}</td>
        </tr>
        <tr>
            <td>Jenis Pembayaran</td>
            <td>:</td>
            <td id="jenis_pembayaran">{{$data->jenis_pembayaran}}</td>
        </tr>
        <tr>
            <td>Kode Pesanan</td>
            <td>:</td>
            <td id="kode_pesanan"><div class="badge bg-warning">{{$data->kode_pesanan}}</div></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y | H:i')}}</td>
        </tr> 
    </table>
    <table class="" border="1" cellspacing="0" cellpadding="5" style="margin-top: 15px; width: 100%">
        <thead class="table-dark">
            <tr>
                <th>Nama Menu</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody id="detail_pesanan_row">
            @php
                $total = 0;
            @endphp
            @foreach ($detail as $item)
            @php
                $total+=$item->harga_satuan * $item->qty;
            @endphp
                <tr>
                    <td>{{$item->nama_menu}}</td>
                    <td>{{$item->qty}}</td>
                    <td>Rp{{number_format($item->harga_satuan, 0, ',', '.')}}</td>
                    <td>Rp{{number_format($item->harga_satuan * $item->qty, 0, ',', '.')}}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">Total Pembayaran</td>
                <td>Rp{{number_format($total, 0, ',', '.')}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <hr>
    <p style="text-align: center">Terimakasih sudah melakukan pemesanan di e-resto kami</p>
</body>
</html>