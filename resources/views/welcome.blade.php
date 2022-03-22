@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        @foreach ($todoxxxx['activoxx'] as $key => $item)
                            <li class="nav-item">
                                <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="tab{{ $item->id }}-tab"
                                    data-toggle="pill" href="#tab{{ $item->id }}" role="tab"
                                    aria-controls="tab{{ $item->id }}"
                                    aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $item->activo }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">

                        @foreach ($todoxxxx['activoxx'] as $key => $itemx)
                            <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="tab{{ $itemx->id }}"
                                role="tabpanel" aria-labelledby="tab{{ $itemx->id }}-tab">

                                <div class="row">


                                    @foreach ($itemx->tablas as $tablaxxx)
                                        <div class="col-12 col-sm-6">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="fas fa-edit"></i>
                                                    {{ $tablaxxx->acceso->acceso }}
                                                </h3>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        @foreach ($tablaxxx->cabetabls as $cabecera)
                                                            <th>{{ $cabecera->cabecera->cabecera }}</th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($tablaxxx->detatabls as $detatabl)
                                                        <tr>
                                                            @if ($detatabl->rowspant > 0)
                                                                <td rowspan="{{ $detatabl->rowspant }}"
                                                                    class="align-middle">
                                                                    <div class="alert alert-primary">
                                                                        {{ $detatabl->tabla->activo->activo }}
                                                                    </div>
                                                                </td>
                                                                @if ($detatabl->tabla->acceso->id < 3)
                                                                    <td rowspan="{{ $detatabl->rowspant }}"
                                                                        class="align-middle">
                                                                        <div class="alert alert-primary">
                                                                            {{ $detatabl->tabla->acceso->acceso }}
                                                                        </div>
                                                                    </td>
                                                                @endif
                                                            @endif



                                                            @if ($detatabl->rowspana == 1)
                                                                <td colspan="2" class="align-middle">
                                                                </td>
                                                            @else
                                                                @if ($detatabl->rowspana > 0)
                                                                    <td rowspan="{{ $detatabl->rowspana }}"
                                                                        class="align-middle">
                                                                        <div class="alert {{ $detatabl->classact }}">
                                                                            {{ $detatabl->actor->actor }}
                                                                        </div>
                                                                    </td>
                                                                @endif

                                                                @if ($detatabl->tabla->acceso->id < 3)
                                                                    @if ($detatabl->rowspanm == 1)
                                                                        <td class="align-middle">
                                                                        </td>
                                                                    @else
                                                                        @if ($detatabl->rowspanm > 0)
                                                                            <td rowspan="{{ $detatabl->rowspanm }}"
                                                                                class="align-middle">
                                                                                <div
                                                                                    class="alert {{ $detatabl->classmot }}">
                                                                                    {{ $detatabl->motivo->motivo }}
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif


                                                            <td>
                                                                @if ($detatabl->resultad->resultad != '')
                                                                    <div class="alert {{ $detatabl->classres }}">
                                                                        {{ $detatabl->resultad->resultad }}
                                                                    </div>
                                                                @endif

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
