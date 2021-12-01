@extends('panel.dashboard.layouts.app', ['activePage' => 'indice.index'])
@section('title', 'Manual')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-md-12">
                    @include('panel.admin.includes.alerts')
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12 justify-content-lg-end">
                    <button data-toggle="modal" data-target="#indice" type="button" class="btn btn-dark">Add
                        Índice</button>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header border-0">
                            <h3 class="card-title">Manual</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Título</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#indiceEdit" title="Editar"><i
                                                    class="fa fa-edit color-orange"></i></a>
                                            <a href="{{ route('modelo.indice.delete', ['id'=>$item->id]) }}"
                                                title="Deletar"><i class="fa fa-trash color-orange"></i></a>

                                            {{-- edita indice --}}
                                            <div class="modal fade" id="indiceEdit" tabindex="-1" role="dialog"
                                                aria-labelledby="indiceEdit" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h5 class="modal-title" id="exampleModalLabel">Cadastrar
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    {!! Form::open(['route'=>['modelo.indice.update',
                                                                    'id'=>$item->id]]) !!}
                                                                    {!! Form::hidden('modelo_id', $id) !!}
                                                                    @include('panel.dashboard.pages.indices._forms.form')
                                                                    <button type="submit"
                                                                        class="btn btn-block btn-dark">Editar</button>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhuma encontrado.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="indice" tabindex="-1" role="dialog" aria-labelledby="indice" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::open(['route'=>'modelo.indice.store']) !!}
                        {!! Form::hidden('modelo_id', $id) !!}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Título</label>
                                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Conteúdo</label>
                                    <textarea name="content" class="form-control"
                                        id="edit2">{{old('content')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-dark">Cadastrar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection