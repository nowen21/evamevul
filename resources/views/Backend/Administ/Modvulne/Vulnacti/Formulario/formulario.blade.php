<?php   $idxxxxxx='tipoprob';    ?>
<div class="form-row">

    <div class="form-group col-md-12">
        {!! Form::label($idxxxxxx, 'Nombre Tipo Probabilidad:', ['class' => 'control-label']) !!}
        {!! Form::text($idxxxxxx, null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has($idxxxxxx))
        <div class="invalid-feedback d-block">
            {{ $errors->first($idxxxxxx) }}
        </div>
        @endif
    </div>  
</div>
