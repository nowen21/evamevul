
<?php   $idxxxxxx='vulnerab';    ?>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label($idxxxxxx, 'Vulnerabilidad:', ['class' => 'control-label']) !!}
        <div id="{{$idxxxxxx}}" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->vulnerab }}
        </div>
    </div>  
    <?php   $idxxxxxx='activo_id';    ?>
    <div class="form-group col-md-6">
        {!! Form::label($idxxxxxx, 'Activo:', ['class' => 'control-label']) !!}
        <div id="{{$idxxxxxx}}" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->activo->activo }}
        </div>
    </div> 
</div>
