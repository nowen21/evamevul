<?php $idxxxxxx = 'probabil_id'; ?>
<div class="form-group col-md-12">
    {!! Form::label($idxxxxxx, 'Probabilidad:', ['class' => 'control-label']) !!}
    {!! Form::select($idxxxxxx, $todoxxxx['probabil'], null, ['class' => 'form-control form-control-sm select2']) !!}
    @if ($errors->has($idxxxxxx))
        <div class="invalid-feedback d-block">
            {{ $errors->first($idxxxxxx) }}
        </div>
    @endif
</div>
