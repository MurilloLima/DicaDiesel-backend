@extends('panel.dashboard.layouts.app', ['activePage' => 'marca.index'])
@section('title', 'Editar')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('panel.admin.includes.alerts')</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header border-0">
                            <h3 class="card-title">Editar</h3>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    {!! Form::open(['route'=>['marca.update', 'id'=>$data]]) !!}
                                    @include('panel.dashboard.pages.marcas._forms.form')
                                    <button type="submit" class="btn btn-block btn-dark">Editar</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection