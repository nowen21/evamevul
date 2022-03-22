<div class="form-row">

    <div class="form-group col-md-12">
        {!! Form::label('nomb_tare', 'Nombre table de retención:', ['class' => 'control-label']) !!}
        {!! Form::text('nomb_tare', null, ['class' => 'form-control form-control-sm' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('nomb_tare'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nomb_tare') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('fein_tare', 'Fecha de la tabla de retención:', ['class' => 'control-label']) !!}
        {!! Form::text('fein_tare', null, ['class' => 'form-control form-control-sm' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('fein_tare'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fein_tare') }}
        </div>
        @endif
    </div>
    
    <div class="form-group col-md-6">
        {!! Form::label('fefi_tare', 'Fecha de finalizacirn de la tabla de retención:', ['class' => 'control-label']) !!}
        {!! Form::text('fefi_tare', null, ['class' => 'form-control form-control-sm' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('fefi_tare'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fefi_tare') }}
        </div>
        @endif
    </div>
    
  
</div>
