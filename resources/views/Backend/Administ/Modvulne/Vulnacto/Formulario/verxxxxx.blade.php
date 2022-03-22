
<?php   $idxxxxxx='vulnerab';    ?>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label($idxxxxxx, 'Vulnerabilidad:', ['class' => 'control-label']) !!}
        <div id="{{$idxxxxxx}}" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->vulnerab->vulnerab }}
        </div>
    </div>  
    <?php   $idxxxxxx='actor_id';    ?>
    <div class="form-group col-md-6">
        {!! Form::label($idxxxxxx, 'Actor:', ['class' => 'control-label']) !!}
        <div id="{{$idxxxxxx}}" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->actor->actor }}
        </div>
    </div> 
</div>
