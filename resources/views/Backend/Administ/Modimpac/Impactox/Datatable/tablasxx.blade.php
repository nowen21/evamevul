{{-- este archivo se llama en: pestanias.blade.php en la misma carpeta --}}
@foreach ($todoxxxx['tablasxx'] as $tablasxx)
@component($tablasxx["archdttb"], ['todoxxxx'=>$tablasxx])
    @slot('tableName')
    {{$tablasxx['tablaxxx'] }}
    @endslot
    @slot('class')
    @endslot
  @endcomponent
@endforeach

@foreach($todoxxxx['modalsxx'] as $modalxxx)
@include($modalxxx)

@endforeach
