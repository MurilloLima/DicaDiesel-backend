@extends('panel.dashboard.layouts.app', ['activePage' => 'marca.index'])
@section('title', 'Marcas')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('panel.admin.includes.alerts')</div>
            </div>
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12">
                    <a href="{{ route('marca.create') }}" class="btn btn-dark  float-right">Cadastrar</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header border-0">
                            <h3 class="card-title">Marcas</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Marca</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <a href="{{ route('marca.edit', ['id'=>$item->id]) }}" title="Editar"><i
                                                    class="fa fa-edit color-orange"></i></a>
                                            <a href="{{ route('marca.delete', ['id'=>$item->id]) }}" title="Deletar"><i
                                                    class="fa fa-trash color-orange"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Nenhuma marca encontrado.</td>
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