<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('activo_id', 'Activo:', ['class' => 'control-label']) !!}
            {!! Form::select('activo_id', $todoxxxx['activoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
            @if ($errors->has('activo_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('activo_id') }}
                </div>
            @endif
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('acceso_id', 'Acceso:', ['class' => 'control-label']) !!}
            {!! Form::select('acceso_id', $todoxxxx['accesoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
            @if ($errors->has('acceso_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('acceso_id') }}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('actor_id', 'Actor:', ['class' => 'control-label']) !!}
            {!! Form::select('actor_id', $todoxxxx['actorxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
            @if ($errors->has('actor_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('actor_id') }}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('motivo_id', 'Motivo:', ['class' => 'control-label']) !!}
            {!! Form::select('motivo_id', $todoxxxx['motivoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
            @if ($errors->has('motivo_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('motivo_id') }}
                </div>
            @endif
        </div>
    </div>
    <!-- /.col -->
</div>
