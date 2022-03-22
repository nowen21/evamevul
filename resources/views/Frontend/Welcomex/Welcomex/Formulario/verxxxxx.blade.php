<div class="form-row">

    <div class="form-group col-md-12">
        {!! Form::label('nomb_tare', 'Nombre table de retención:', ['class' => 'control-label']) !!}
       <div id="nomb_tare" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->nomb_tare }}
        </div>
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('fein_tare', 'Fecha de la tabla de retención:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->fein_tare }}
        </div>
    </div>
    
    <div class="form-group col-md-6">
        {!! Form::label('fefi_tare', 'Fecha de finalizacirn de la tabla de retención:', ['class' => 'control-label']) !!}
          <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->fefi_tare }}
        </div>
    </div>
    
  
</div>
