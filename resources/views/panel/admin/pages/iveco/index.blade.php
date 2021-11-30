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
                                    {!! Form::open(['route'=>'iveco.result']) !!}
                                    <div class="form-group">
                                        <label for="">Ano</label>
                                        {!! Form::select('ano', [
                                            '2000'=>'2000',
                                        ], old('ano'), ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="">Modelo</label>
                                        <select name="modelo" class="form-control">
                                            <option value="Escolha"></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">O que deseja buscar</label>
                                        <input type="text" name="value" class="form-control" placeholder="Informe o que deseja buscar.">
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection