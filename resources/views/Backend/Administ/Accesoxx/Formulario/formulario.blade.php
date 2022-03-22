<div class="form-row">

    <div class="form-group col-md-12">
        {!! Form::label('acceso', 'Acceso:', ['class' => 'control-label']) !!}
        {!! Form::text('acceso', null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('acceso'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('acceso') }}
        </div>
        @endif
    </div>  
</div>
