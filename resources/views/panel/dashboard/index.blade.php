@extends('panel.dashboard.layouts.app', ['activePage' => 'admin.index'])
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
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
                                    <h4 class="nv-title">Seja bem vindo!</h4>

                                    <img src="{{ asset('assets/logos/logo-sem-fundo.jpg') }}" alt=""
                                        class="img-fluid mb-2">

                                    <p>Aqui no app pop você tirar dúvidas técnicas da manutenção dos veículos
                                        pesados, dados de fábrica e dicas de montagem e manutenção dos componentes de
                                        grandes
                                        marcas do mercado, Volvo, Scania, Iveco, Mercedes entre outras, aqui você
                                        encontra
                                        torques, códigos de falhas, dados de ajuste e muito mais.</p>
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