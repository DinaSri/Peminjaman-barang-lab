<div class="box-body">
    <div class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
        {!! Form::label('title', 'Nama') !!}

        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Nama buku']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group has-feedback{{ $errors->has('id_barang') ? ' has-error' : '' }}">
        {!! Form::label('id_barang', 'nama') !!}

        {!! Form::select('id_barang', App\Author::pluck('name','id')->all(), null, ['class' => 'form-control js-select2']) !!}
        {!! $errors->first('id_barang', '<p class="help-block">:message</p>') !!}
    </div>
      <div class="form-group has-feedback{{ $errors->has('cover') ? ' has-error' : '' }}">
        {!! Form::label('cover', 'Cover') !!}

        {!! Form::file('cover') !!}
        @if (isset($barang) && $barang->cover)
            <p> {!! Html::image(asset('img/'.$barang->cover), null, ['class' => 'img-rounded img-responsive']) !!} </p>
        @endif
        <p class="help-block">Size file (JPG/JPEG/PNG/GIF) maks 1MB</p>
        {!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
</div>