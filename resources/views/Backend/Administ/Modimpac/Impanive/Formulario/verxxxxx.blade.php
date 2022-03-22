<?php $idxxxxxx = 'nivel_id'; ?>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Nivel:', ['class' => 'control-label']) !!}
        <div id="{{ $idxxxxxx }}" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->nivel->nivel }}
        </div>
    </div>

    <?php $idxxxxxx = 'impanive'; ?>
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Valor:', ['class' => 'control-label']) !!}
        <div id="{{ $idxxxxxx }}" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->impanive }}
        </div>
    </div>

    <?php $idxxxxxx = 'impactox'; ?>

    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Impacto:', ['class' => 'control-label']) !!}
        <div id="{{ $idxxxxxx }}" class="form-control form-control-sm">
            {{ $todoxxxx['impactox'] }}
        </div>
    </div>
</div>
