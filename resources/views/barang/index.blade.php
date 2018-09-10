@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-12"><br>
			<div class="card card-success">
			  <div class="card-header">Barang
			  	<div class="card-title pull-right">
			  		@role('admin')
			  		<a class="btn btn-outline-primary" href="{{ route('barang.create') }}" >Tambah Data</a>
			  		 <a class="btn btn-outline-warning" href="{{ url('/admin/export/barang') }}">Export</a>
			  		@endrole
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Barang</th>
					  <th>Stok</th>
					  <th>keadaan</th>
					  <th>Gambar Barang</th>
					@role('admin') <th colspan="3">Action</th>@endrole
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($barangs as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->stok }}</td>
				    	<td>{{ $data->keadaan }}</td>
				    	<td><img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;"></td>
				    	 @role('admin')
						<td>
							<a class="btn btn-outline-warning" href="{{ route('barang.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('barang.show',$data->id) }}" class="btn btn-outline-success">Show</a>
						</td> -->
						
						@endrole
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
