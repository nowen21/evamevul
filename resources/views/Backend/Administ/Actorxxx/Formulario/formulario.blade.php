<div class="form-row">

    <div class="form-group col-md-12">
        {!! Form::label('actor', 'Actor:', ['class' => 'control-label']) !!}
        {!! Form::text('actor', null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('actor'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('actor') }}
        </div>
        @endif
    </div>  
</div>
