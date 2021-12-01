@extends('panel.dashboard.layouts.app', ['activePage' => 'modelo.index'])
@section('title', 'Cadastrar')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-3">
                    @include('panel.admin.includes.alerts')
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header border-0">
                            <h3 class="card-title">Cadastrar</h3>
                        </div>
                        <div class="card-body pb-5">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    {!! Form::open(['route'=>'modelo.store']) !!}
                                    @include('panel.dashboard.pages.modelos._forms.form')
                                    <button type="submit" class="btn btn-block btn-dark">Cadastrar</button>
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