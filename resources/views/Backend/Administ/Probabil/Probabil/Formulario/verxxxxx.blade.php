<?php $idxxxxxx = 'nivel_id'; ?>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Nivel:', ['class' => 'control-label']) !!}
        <div id="{{ $idxxxxxx }}" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->nivel->nivel }}
        </div>
    </div>

    <?php $idxxxxxx = 'probabil'; ?>
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Valor:', ['class' => 'control-label']) !!}
        <div id="{{ $idxxxxxx }}" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->probabil }}
        </div>
    </div>

    <?php $idxxxxxx = 'tipoprob'; ?>

    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Probabilidad:', ['class' => 'control-label']) !!}
        <div id="{{ $idxxxxxx }}" class="form-control form-control-sm">
            {{ $todoxxxx['tipoprob'] }}
        </div>
    </div>
</div>
