@extends('layouts.admin')

@section('dashboard')
   Buku
   <small>Export Buku</small>
@endsection

@section('breadcrumb')
   <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="{{ url('/admin/barang') }}">Buku</a></li>
   <li class="active">Export Buku</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Export Barang</h3>
              </div>
                <!-- /.box-header -->
                {!! Form::open(['url' => route('export.barang.post'), 'method' => 'post']) !!}
                    <div class="box-body">
                        <div class="form-group has-feedback{!! $errors->has('nama') ? 'has-error' : '' !!}">
                            {!! Form::label('nama', 'nama') !!}

                            {!! Form::select('nama[]', App\barang::pluck('nama', 'id')->all(), null, [
                                'class' => 'form-control js-select2',
                                'multiple' => 'multiple'
                                ]) !!}
                            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group has-feedback{!! $errors->has('type') ? 'has-error' : '' !!}">
                            {!! Form::label('type', 'Pilih Output') !!}

                            <div class="radio">
                                <label>
                                    {{ Form::radio('type', 'xls', true) }} Excel
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    {{ Form::radio('type', 'pdf') }} PDF
                                </label>
                            </div>
                            {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {!! Form::submit('Download', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
