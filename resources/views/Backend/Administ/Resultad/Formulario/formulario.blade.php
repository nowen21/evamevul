<div class="form-row">

    <div class="form-group col-md-12">
        {!! Form::label('resultad', 'Resultado:', ['class' => 'control-label']) !!}
        {!! Form::text('resultad', null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('resultad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('resultad') }}
        </div>
        @endif
    </div>  
</div>
