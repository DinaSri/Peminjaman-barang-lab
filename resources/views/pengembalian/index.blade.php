@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="card card-success">
			  <div class="card-header">Data Pengembalian
			  	<div class="card-title pull-right">
			  		@role('admin')
			  		 <a class="btn btn-outline-warning" href="{{ url('/admin/export/pengembalian') }}">Export</a>
			  		 	@endrole
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
						  	<thead>
			  		<tr>
			  		  	<th>No</th>
					  	<th>Nama Member</th>
						<th>Nama Barang</th>
					  	<th>Jumlah Pinjam</th>
						<th>Tanggal Peminjaman</th>
						<th>Tanggal Pengembalian</th>

					 
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($pengembalians as $data)
				  	  <tr>
				    		<td>{{ $no++ }}</td>
				    		<td>{{ $data->user->name }}</td>
							<td>{{ $data->barang->nama }}</td>
				    		<td>{{ $data->jumlah }}</td>
							<td>{{ $data->tgl_pinjam }}</td>
							<td>{{ $data->created_at }}</td>

				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection