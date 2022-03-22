<div class="form-row">

    <div class="form-group col-md-12">
        {!! Form::label('motivo', 'Motivo:', ['class' => 'control-label']) !!}
        {!! Form::text('motivo', null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('motivo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('motivo') }}
        </div>
        @endif
    </div>  
</div>
