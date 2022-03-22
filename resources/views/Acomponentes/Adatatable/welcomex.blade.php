@include('Acomponentes.Adatatable.adicional')
<div class="card card-outline card-secondary">
   
    <div class="card-header">
        <h3 class="card-title">
            {{ $todoxxxx['titulist'] }}
           
        </h3>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table id="{{ $tableName }}" class="table table-bordered   table-sm">
                <thead>

                    @foreach ($todoxxxx['cabecera'] as $cabecera)
                        <tr class="text-center">
                            @foreach ($cabecera as $cabecerx)
                                <th style="width: {{ $cabecerx['widthxxx'] }}%;" rowspan="{{ $cabecerx['rowspanx'] }}"
                                    colspan="{{ $cabecerx['colspanx'] }}"> {{ $cabecerx['td'] }}</th>
                            @endforeach
                        </tr>
                    @endforeach
                </thead>
                <tbody id="cuerpoxx">

                </tbody>
                <tfoot>
                    @foreach ($todoxxxx['cabecera'] as $cabecera)
                        <tr class="text-center">
                            @foreach ($cabecera as $cabecerx)
                                <th style="width: {{ $cabecerx['widthxxx'] }}%;" rowspan="{{ $cabecerx['rowspanx'] }}"
                                    colspan="{{ $cabecerx['colspanx'] }}"> {{ $cabecerx['td'] }}</th>
                            @endforeach
                        </tr>
                    @endforeach
                </tfoot>
            </table>
        </div>
    </div>
</div>
