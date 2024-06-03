@extends('layouts.landing_base_layout')
@section('title', 'Pesanan')
@section('reservation', 'color')
@section('content')
<section id="content" class="content-wrap py-0">
	<div class="container" style="padding: 10px 0px;">
		<h3 class="text-center">Order Details</h3>
		<div class="table-responsive">
			<table class="table table-bordered table-responsive">
				<thead>
					<tr style="background-color: #e7272d; color:white;">
						<th width="10%">Gambar</th>
						<th width="25%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
				</thead>
				<tbody id="data_pesanan">
					@if (count($data_keranjang) == 0)
						<tr>
							<th colspan="6" class="text-center">Anda belum memilih menu apapun</th>
						</tr>
					@endif
					@php
						$total_harga = 0;
					@endphp
					@foreach ($data_keranjang as $item)
					@php
						$total_harga += $item->harga * $item->jumlah_order;
					@endphp
						<tr>
							<td><img src="{{Storage::url($item->foto_menu)}}" alt="foto_menu"></td>
							<td>{{$item->nama_menu}}</td>
							<td style="min-width: 130px" class="text-center">
								<button type="button" onclick="modifyPesanan('tambah', '{{Crypt::encrypt($item->id)}}')" class="btn btn-sm bi bi-plus-circle" style="font-size:1em;"></button>
									{{$item->jumlah_order}}
								<button type="button" onclick="modifyPesanan('kurang', '{{Crypt::encrypt($item->id)}}')" class="btn btn-sm bi-file-minus" style="font-size:1em;"></button>
							</td>
							<td>Rp{{number_format($item->harga, 0, ',', '.')}}</td>
							<td>Rp{{number_format($item->harga * $item->jumlah_order, 0, ',', '.')}}</td>
							<td><button type="button" class="btn btn-danger" onclick="modifyPesanan('hapus', '{{Crypt::encrypt($item->id)}}')">Remove</button></td>
						</tr>
					@endforeach
					@if (count($data_keranjang) != 0)
					<tr>
						<td colspan="4">Total Harga :</td>
						<td id="total_formater">Rp{{number_format($total_harga, 0, ',', '.')}}</td>
						<td class="bg-secondary"></td>
					</tr>
					@endif
				</tbody>
			</table>
		</div>
		<center>
			@if (count($data_keranjang) != 0)
			<button class="btn btn-danger" id="btn-checkout" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				Checkout
			</button>
			@endif
			<div class="collapse my-4" id="collapseExample">
				<div class="card card-body">
				  <h3 class="text-center">
					Silahkan Pilih Metode Pembayaran
				  </h3>
				  <div class="container">
					<div class="row justify-content-center">
						@foreach ($jenis_pembayaran as $item)
						<div class="col-4 col-lg-2">
								<center>
									<button class="btn btn-light" type="button" onclick="confirmPembayaran('{{$item->jenis_pembayaran}}', {{$item->id}})">
										<img src="{{$item->logo}}" alt="" style="height: 100px; width:150px; object-fit:cover; object-position:center;">
										<br>
										<p>{{$item->jenis_pembayaran}}</p>
									</button>
								</center>
							</div>
						@endforeach
					</div>
				  </div>
				</div>
			</div>
		</center>
		<br>
		@if (!empty($history))
		<h3 class="text-center">Order History</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr style="background-color: #e7272d; color:white;">
						<th>Nama Pemesan</th>
						<th>Kode Pesanan</th>
						<th>No Meja</th>
						<th>Jenis Pembayaran</th>
						<th>Status</th>
						<th>Total Pembayaran</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($history as $item)
						<tr>
							<td>{{$item->nama_pemesan}}</td>
							<td>{{$item->kode_pesanan}}</td>
							<td>{{$item->no_meja}}</td>
							<td>{{$item->jenis_pembayaran}}</td>
							<td>{{$item->status}}</td>
							<td>Rp{{number_format($item->total_pembayaran, 0, ',', '.')}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@endif
	</div>
</section>
<div class="modal fade" id="modalConfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{url('checkout/confirm')}}" method="post">
				<div class="modal-body">
					<p>Lakukan pembayaran dengan menggunakan <span class="badge badge-warning" id="metode_bayar"></span>?</p>
					<h5>Total yang perlu dibayar : <span id="total_pembayaran"></span></h5>
					<h5>No Meja anda : <span>{{$no_meja}}</span></h5>
					<p>Silahkan lengkapi data dibawah ini</p>
					@csrf
					<div id="form-input">
		
					</div>
					<input type="hidden" name="total_pembayaran" id="input_total_pembayaran">
					<input type="hidden" name="id_pembayaran" id="id_pembayaran">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="btn-checkout">Konfirmasi</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@push('js')
	<script>
		var clearTotalBayar = "{{$total_harga}}";
		function modifyPesanan(aksi, id_menu){
			$.ajax({
				method: 'POST',
				url: "{{url('pesanan/modify')}}"+"/"+id_menu,
				data: {_token: "{{csrf_token()}}", 'action': aksi},
				success: function(res){
					$('#data_pesanan').html('');
					if(res.data.length == 0){
						$('#data_pesanan').html('<th colspan="6" class="text-center">Anda belum memilih menu apapun</th>');
						$('#btn-checkout').addClass('d-none')
					}
					var total_formater = 0;
					res.data.forEach(element => {
						total_formater += element.harga * element.jumlah_order
						$('#data_pesanan').append(`
							<tr>
								<td><img src="${element.foto_menu}" alt="foto_menu"></td>
								<td>${element.nama_menu}</td>
								<td style="min-width: 130px" class="text-center">
									<button type="button" onclick="modifyPesanan('tambah', '${element.crypted_id}')" class="btn btn-sm bi bi-plus-circle" style="font-size:1em;"></button>
									${element.jumlah_order}
									<button type="button" onclick="modifyPesanan('kurang', '${element.crypted_id}')" class="btn btn-sm bi-file-minus" style="font-size:1em;"></button>
								</td>
								<td>Rp${element.harga.toLocaleString('id')}</td>
								<td>Rp${(element.harga * element.jumlah_order).toLocaleString('id')}</td>
								<td><button type="button" class="btn btn-danger" onclick="modifyPesanan('hapus', '${element.crypted_id}')">Remove</button></td>
							</tr>
						`);
					});
					clearTotalBayar = total_formater;
					$('#total_formater').html(total_formater.toLocaleString('id'))
					if(res.data.length != 0){
						$('#data_pesanan').append(`
						<tr>
							<td colspan="4">Harga Total :</td>
							<td id="total_formater">Rp${total_formater.toLocaleString('id')}</td>
							<td class="bg-secondary"></td>
						</tr>
						`)
					}
				},
				error: function(res){
					Swal.fire(
					'Maaf',
					"Terjadi error pada server silahkan coba beberapa saat lagi",
					'error'
					)
				}
			})
		}
	</script>
	<script>
		function confirmPembayaran(jenis_pembayaran, id){
			$('#modalConfirm').modal('show')
			$('#metode_bayar').html(jenis_pembayaran)
			$('#form-input').html(`
				<div class="form-group">
					<label for="exampleInputEmail1">Pesanan Atas Nama:</label>
					<input type="text" class="form-control" name="nama_pemesan" required>
				</div>
			`)
			if(jenis_pembayaran == 'Cash'){
				$('#form-input').append(`
				<div class="form-group" id="input_telp">
					<label for="exampleInputEmail1">No Telpon:</label>
					<input type="text" class="form-control" name="no_telp" required>
				</div>
			`)
			}
			$('#total_pembayaran').html($('#total_formater').html())
			$('#id_pembayaran').val(id)
			$('#input_total_pembayaran').val(clearTotalBayar)
			// if(jenis_pembayaran == "Cash"){
			// 	Swal.fire({
			// 		icon: 'info',
			// 		title: 'Konfirmasi Pembayaran',
			// 		html:
			// 		'Lakukan pembayaran dengan '+jenis_pembayaran+"?<br><br>" +
			// 		'silahkan isi no telepon anda sebagai bukti konfirmasi:<br>' +
			// 		'<input type="text" class="form-control" placeholder="Masukan nomor telp/whatsapp anda"> <br><br>' +
			// 		'Pembayaran cash dilakukan setelah anda menerima pesanan, silahkan serahkan uang pembayaran pada pengantar setelah makanan diantarkan',
			// 		showCancelButton: true,
			// 		confirmButtonText: 'Confirm',
			// 		}).then((result) => {
			// 		if (result.isConfirmed) {
			// 			Swal.fire('Saved!', '', 'success')
			// 		} else if (result.isDenied) {
			// 			Swal.fire('Changes are not saved', '', 'info')
			// 		}
			// 	})
			// }else{
			// 	Swal.fire({
			// 		title: 'Konfirmasi Pembayaran',
			// 		text: 'Lakukan pembayaran dengan '+jenis_pembayaran+"?",
			// 		showCancelButton: true,
			// 		confirmButtonText: 'Confirm',
			// 		}).then((result) => {
			// 		if (result.isConfirmed) {
			// 			Swal.fire('Saved!', '', 'success')
			// 		} else if (result.isDenied) {
			// 			Swal.fire('Changes are not saved', '', 'info')
			// 		}
			// 	})
			// }
		}
	</script>
@endpush