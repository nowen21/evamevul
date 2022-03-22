<?php   $idxxxxxx='herramie_id';    ?>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label($idxxxxxx, 'Herramienta:', ['class' => 'control-label']) !!}
        {!! Form::select($idxxxxxx, $todoxxxx['herramie'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has($idxxxxxx))
            <div class="invalid-feedback d-block">
                {{ $errors->first($idxxxxxx) }}
            </div>
        @endif
    </div>  
</div>
