@extends('panel.admin.layouts.app' ,['activePage' => 'user.password'])
@section('title', 'Usuário')
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
                            <h3 class="card-title">Alterar password</h3>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route'=>'user.password.update']) !!}
                            @include('panel.admin.pages.user._form.form_password')
                            <br><br>
                            <button type="submit" class="btn btn-block bg-orange"
                                style="color: white; font-weight: bold;">Alterar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection