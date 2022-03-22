<?php $idxxxxxx = 'nivel_id'; ?>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Nivel:', ['class' => 'control-label']) !!}
        {!! Form::select($idxxxxxx, $todoxxxx['nivelxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has($idxxxxxx))
            <div class="invalid-feedback d-block">
                {{ $errors->first($idxxxxxx) }}
            </div>
        @endif
    </div>

    <?php $idxxxxxx = 'impanive'; ?>
    <div class="form-group col-md-4">
        {!! Form::label($idxxxxxx, 'Valor:', ['class' => 'control-label']) !!}
        <div id="{{ $idxxxxxx }}" class="form-control form-control-sm">
            {{ isset($todoxxxx['modeloxx']->impanive)?$todoxxxx['modeloxx']->impanive:'' }}
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