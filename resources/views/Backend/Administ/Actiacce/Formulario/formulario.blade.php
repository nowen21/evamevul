<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('acceso_id', 'Acceso:', ['class' => 'control-label']) !!}
        {!! Form::select('acceso_id', $todoxxxx['actiacce'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('acceso_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('acceso_id') }}
            </div>
        @endif
    </div>  
</div>
