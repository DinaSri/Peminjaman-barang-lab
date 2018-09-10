@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="card card-success">
			  <div class="card-header">Tambah Data Member 
			  	<div class="card-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('user.store') }}" method="post" >
			  		@csrf
			  		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Users</label>	
			  			<input type="text" name="name" class="form-control"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group has-feedback">
			  			<label>Password</label>
          				<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            				@if ($errors->has('password'))
                				<span class="invalid-feedback" role="alert">
                    				<strong>{{ $errors->first('password') }}</strong>
                				</span>
            				@endif
        				</div>
        			<div class="form-group has-feedback">
        				<label>Retype password</label>
          				<input class="form-control" type="password" name="password_confirmation" required>
        			</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection