@extends('panel.admin.layouts.app', ['activePage' => 'iveco.index'])
@section('title', 'Iveco')

@section('content')
<div class="content-wrapper" style="min-height: 255px;">
    <!-- Main content -->
    <section class="content">
        <div class="container stretch">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12" style="margin-top: 15px">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::open(['route'=>'marca.result']) !!}
                                    <input type="hidden" name="marca" value="{{$marca->id}}">
                                    <div class="form-group">
                                        <label for="">Modelo</label>
                                        {!! Form::select('modelo', $modelos, $marca->name ?? old('name'),
                                        ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="">O que deseja buscar</label>
                                        <input type="text" name="value" class="form-control"
                                            placeholder="Informe o que deseja buscar.">
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-block">Buscar</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    @if (count($indices) > 0)
                    <div class="card">
                        <div class="card-hearder">
                            <h2 class="card-title">Resultado({{count($indices)}})</h2>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    @forelse ($indices as $item)
                                    <button type="button" class="btn btn-block btn-info btn-sm mb-2"
                                        data-target="#content-{{$item->id}}"
                                        data-toggle="modal">{{$item->title}}</button>
                                    {{-- modal --}}
                                    <div class="modal fade" id="content-{{$item->id}}" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{$item->title}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!!$item->content!!}
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    {{-- end modal --}}
                                    @empty
                                    <button type="button" class="btn btn-block btn-warning btn-xs">Ops! Não encontramos,
                                        tente novamente!</button>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection