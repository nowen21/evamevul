<div class="form-row">

    <div class="form-group col-md-12">
        {!! Form::label('activo', 'Activo:', ['class' => 'control-label']) !!}
        {!! Form::text('activo', null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('activo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('activo') }}
        </div>
        @endif
    </div>  
</div>
