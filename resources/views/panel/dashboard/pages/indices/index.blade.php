@extends('panel.dashboard.layouts.app', ['activePage' => 'indice.index'])
@section('title', 'Manual')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('panel.admin.includes.alerts')</div>
            </div>
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12 justify-content-lg-end">
                    <a href="{{ route('modelo.indice.create') }}" class="btn btn-dark">Add Índice</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header border-0">
                            <h3 class="card-title">Manual - {{$data->name}}</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Modelo</th>
                                        <th>Referência</th>
                                        <th>Marca</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data->indices as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->ref}}</td>
                                        <td>{{$item->marca->name}}</td>
                                        <td>
                                            <a href="{{ route('modelo.indice.index', ['id'=>$item->id]) }}" title="Manual"><i
                                                class="fa fa-list-alt color-orange"></i></a>
                                            <a href="{{ route('modelo.edit', ['id'=>$item->id]) }}" title="Editar"><i
                                                    class="fa fa-edit color-orange"></i></a>
                                            <a href="{{ route('modelo.delete', ['id'=>$item->id]) }}" title="Deletar"><i
                                                    class="fa fa-trash color-orange"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhuma modelo encontrado.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection