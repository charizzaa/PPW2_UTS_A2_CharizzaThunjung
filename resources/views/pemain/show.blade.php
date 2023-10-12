@extends('master')
@section('body')
	<div class="container w-50 card p-4 d-flex align-items-center">
		<h4 style="font-weight: bold">Detail Pemain</h4>
		<table class="table table-bordered">
			<tr>
				<td>Nama Pemain</td>
				<td>{{ $tabel_pemain->nama_pemain }}</td>
			</tr>
			<tr>
				<td>Nomor Punggung</td>
				<td>{{ $tabel_pemain->no_punggung }}</td>
			</tr>
			<tr>
				<td>Posisi</td>
				<td>{{ $tabel_pemain->posisi }}</td>
			</tr>
		</table>
		<button type="button" class="btn btn-outline-danger"><a href="/pemain" style="text-decoration: none; color:red;">Batal</a></button>
	</div>
@endsection