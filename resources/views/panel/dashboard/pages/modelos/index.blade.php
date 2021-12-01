@extends('panel.dashboard.layouts.app', ['activePage' => 'modelo.index'])
@section('title', 'Modelos')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-md-12">@include('panel.admin.includes.alerts')</div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <a href="{{ route('marca.index') }}" class="btn btn-dark">Add Marca</a>
                    <a href="{{ route('modelo.create') }}" class="btn btn-dark">Add Modelo</a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header border-0">
                            <h3 class="card-title">Modelos</h3>
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
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->ref}}</td>
                                        <td>{{$item->marca->name}}</td>
                                        <td>
                                            <a href="{{ route('modelo.indice.index', ['id'=>$item->id]) }}"
                                                title="Manual"><i class="fa fa-list-alt color-orange"></i></a>
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
            <div class="row">
                <div class="col-md-12">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection