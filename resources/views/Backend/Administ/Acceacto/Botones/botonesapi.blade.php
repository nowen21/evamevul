<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editarxx', $queryxxx->id) }}">EDITAR</a>
        </div>
        <div class="dropdown-item">
            <a class="btn btn-sm btn-primary" href="{{route($requestx->routexxx[0].'.verxxxxx', [$queryxxx->id])}}">VER</a>
        </div>
        <div class="dropdown-item">
            <a class="btn btn-sm btn-danger" href="{{route($requestx->routexxx[0].'.borrarxx', [$queryxxx->id])}}">ELIMINAR</a>
        </div>
        <div class="dropdown-item">
            <a class="btn btn-sm btn-primary" href="{{route($requestx->routexxx[1], [$queryxxx->id])}}">MOTIVO</a>
        </div>
        
    </div>
</div>
