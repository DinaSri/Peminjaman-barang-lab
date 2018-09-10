@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="card card-success">
			  <div class="card-header">Edit Data Peminjaman
			  	<div class="card-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('peminjaman.update',$peminjamans->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			@csrf

			  		<div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Member</label>	
			  			<select name="id_user" class="form-control">
			  				@foreach($users as $data)
			  				<option value="{{ $data->id }}" {{ $selectusers == $data->id ? 'selected="selected"' : '' }} >{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Barang</label>	
			  			<select name="id_barang" class="form-control">
			  				@foreach($barangs as $data)
			  				<option value="{{ $data->id }}" {{ $selectbarangs == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_barang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<!-- <div class="form-group {{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pinjam</label>	
			  			<input type="date" name="tgl_pinjam" class="form-control" value="{{ $peminjamans->tgl_pinjam }}"  required>
			  			@if ($errors->has('tgl_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                            </span>
                        @endif
			  		</div> -->

			  		<div class="form-group {{ $errors->has('tgl_pengembalian') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Peminjaman</label>	
			  			<input type="date" name="tgl_pengembalian" class="form-control" value="{{ $peminjamans->tgl_pengembalian }}"  required>
			  			@if ($errors->has('tgl_pengembalian'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pengembalian') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Barang Yang DiPinjam</label>	
			  			<input type="number" name="jumlah" class="form-control" value="{{ $peminjamans->jumlah }}"  required>
			  			@if ($errors->has('jumlah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection