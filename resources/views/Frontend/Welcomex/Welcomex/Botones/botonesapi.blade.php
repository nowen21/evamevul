<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editarxx', $queryxxx->idxxxxxx) }}">EDITAR</a>
        </div>
        <div class="dropdown-item">
            <a class="btn btn-sm btn-primary" href="{{route($requestx->routexxx[0].'.verxxxxx', [$queryxxx->idxxxxxx])}}">VER</a>
        </div>
        <div class="dropdown-item">
            <a class="btn btn-sm btn-primary" href="{{route($requestx->routexxx[1], [$queryxxx->idxxxxxx])}}">ASIGNAR DETALLE</a>
        </div>
        
    </div>
</div>
