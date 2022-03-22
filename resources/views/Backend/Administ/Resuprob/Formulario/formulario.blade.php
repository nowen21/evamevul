<?php
$idxxxxxx = 'tipoprob_id';
?>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Probabilidad:', ['class' => 'control-label']) !!}
        {!! Form::select($idxxxxxx, $todoxxxx['probabil'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has($idxxxxxx))
            <div class="invalid-feedback d-block">
                {{ $errors->first($idxxxxxx) }}
            </div>
        @endif
    </div>
    <?php
    $idxxxxxx = 'nivel_id';
    ?>
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Nivel:', ['class' => 'control-label']) !!}
        {!! Form::select($idxxxxxx, $todoxxxx['nivelxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has($idxxxxxx))
            <div class="invalid-feedback d-block">
                {{ $errors->first($idxxxxxx) }}
            </div>
        @endif
    </div>
    <?php
    $idxxxxxx = 'impanive';
    ?>
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Valor:', ['class' => 'control-label']) !!}
        <div id="{{$idxxxxxx}}" class="form-control form-control-sm">
            {{ isset($todoxxxx['modeloxx'])?$todoxxxx['modeloxx']->probabil->probabil:'' }}
        </div>
    </div>
</div>
