@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="card card-success">
			  <div class="card-header">Data Member
			  	<div class="card-title pull-right"><a href="{{ route('user.create') }}">Tambah Data</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>email</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($users as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->name }}</td>
				    	<td>{{ $data->email }}</td>
						<!-- <td>
							<a class="btn btn-outline-warning" href="{{ route('user.edit',$data->id) }}">Edit</a>
						</td> -->
						<!-- <td>
							<a href="{{ route('user.show',$data->id) }}" class="btn btn-outline-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('user.destroy',$data->id) }}">
								@csrf
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-outline-danger"  onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
							</form>
						</td>
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