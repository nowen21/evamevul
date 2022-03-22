{{-- este archivo se llama en pestanias.blade.php de la carpeta Pestanias --}}
@extends('layouts.app')
@section('content')
    @component($todoxxxx['rutacarp'] . $todoxxxx['carpetax'] . '.Pestanias.index', ['todoxxxx' => $todoxxxx])
        @slot('crudxxxx')
            @include($todoxxxx['rutarchi'])
        @endslot
    @endcomponent
@section('codigo')
    @foreach ($todoxxxx['ruarchjs'] as $jsxxxxxx)
        @include($jsxxxxxx['jsxxxxxx'])
    @endforeach
@endsection
