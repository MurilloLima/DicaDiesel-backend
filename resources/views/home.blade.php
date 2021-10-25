@extends('panel.admin.layouts.app', ['activePage' => 'admin.index'])
@section('title', 'Home')

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
                            <h4 class="nv-title">Seja bem vindo!</h4>
                            <p>Aqui no app pop você tirar dúvidas técnicas da manutenção dos veículos
                                pesados, dados de fábrica e dicas de montagem e manutenção dos componentes de grandes
                                marcas do mercado, Volvo, Scania, Iveco, Mercedes entre outras, aqui você encontra
                                torques, códigos de falhas, dados de ajuste e muito mais.</p>
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