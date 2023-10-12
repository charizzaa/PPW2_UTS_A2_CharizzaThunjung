@extends('master')
@section('body')
	<div class="container">
		<div class="d-flex flex-row justify-content-between mb-3">
			<h3>
				<b>Data Pemain</b>
			</h3>
		</div>
	<table class="table table-bordered table-striped">
		<thead class="table-dark text-center">
			<tr>
			<th>id</th>
			<th>Nama Pemain</th>
			<th>Nomor Punggung</th>
			<th>Posisi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($tabel_pemain as $pemain)
		<tr>
				<td class="text-center">{{ $pemain->id }}</td>
				<td>{{ $pemain->nama_pemain }}</td>
				<td>{{ $pemain->no_punggung }}</td>
				<td>{{ $pemain->posisi }}</td>
				<td>
					<div class="d-flex flex-row justify-content-center">
						<button class="btn btn-success me-1">
							<a href="{{ route('pemain.show',$pemain->id) }}" class="btn_link">Detail</a>
						</button>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
@endsection