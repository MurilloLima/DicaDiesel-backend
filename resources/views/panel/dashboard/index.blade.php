@extends('panel.dashboard.layouts.app', ['activePage' => 'dashboard.index'])
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-12 justify-content-lg-center text-center mt-5">
                <img src="{{ asset('assets/logos/logo-sem-fundo2.png') }}" width="400" class="img-fluid mb-2" alt="">
               </div>
           </div>
           
        </div>
    </div>
</div>
@endsection