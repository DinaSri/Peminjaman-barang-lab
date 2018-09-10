@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="card card-success">
			  <div class="card-header">Edit Data Barang
			  	<div class="card-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('barang.update',$barangs->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			@csrf

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Barang</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $barangs->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                    	<label class="cc-payment" class="control-label mb-1">Gambar</label>
			  			@if (isset ($barangs) && $barangs->gambar)
			  			<p>
			  				<br>
			  				<img src="{{ asset('assets/img/gambar/' .$barangs->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
			  			</p>
			  			@endif
			  			<input type="file" name="gambar" value="{{ $barangs->gambar }}">
                    </div>

			  		<div class="form-group {{ $errors->has('stok') ? ' has-error' : '' }}">
			  			<label class="control-label">Stok</label>	
			  			<input type="number" name="stok" class="form-control" value="{{ $barangs->stok }}"  required>
			  			@if ($errors->has('stok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('stok') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('keadaan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keadaan</label>	
			  			<input type="text" name="keadaan" class="form-control" value="{{ $barangs->keadaan }}"  required>
			  			@if ($errors->has('keadaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keadaan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection