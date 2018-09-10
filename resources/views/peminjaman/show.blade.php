@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="card card-success">
			  <div class="card-header">Peminjaman
			  	<div class="card-title pull-right">
			  		<a href="{{ url()->previous() }}">kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">

			  	<form action="{{ route('peminjaman.update',$peminjamans->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

					<div class="form-group">
			  			<label class="control-label">Nama Peminjam</label>
						<input type="text" name="id_user" class="form-control" value="{{ $peminjamans->user->id }}"  readonly>
			  		</div>

					 <div class="form-group">
			  			<label class="control-label">Nama Barang</label>
						<input type="text" name="id_barang" class="form-control" value="{{ $peminjamans->barang->id }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jumlah</label>
						<input type="text" name="jumlah" class="form-control" value="{{ $peminjamans->jumlah }}"  readonly>
			  		</div>
					  <div class="form-group">
			  			<label class="control-label">Tanggal peminjaman</label>
						<input type="text" name="tgl_pinjam" class="form-control" value="{{ $peminjamans->created_at }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Nama Member</label>
						<select name="id_user" class="form-control" disabled="">
						<option value=""></option>
						@foreach($users as $data)
						<option value="{{$data->id}}" <?php if($peminjamans->id_user==$data->id)
						echo "selected='selected'";?>>{{$data->name}}</option>
						@endforeach

					  </select>
					  </div>
					  <div class="form-group">
			  			<label class="control-label">Nama Barang</label>
						<select name="id_barang" class="form-control" disabled="">
						<option value=""></option>
						@foreach($barangs as $data)
						<option value="{{$data->id}}" <?php if($peminjamans->id_barang==$data->id)
						echo "selected='selected'";?>>{{$data->nama}}</option>
						@endforeach

					  </select>
					  </div>

					  <div class="form-group">
			  			<button type="submit" class="btn btn-outline-danger">Kembalikan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection