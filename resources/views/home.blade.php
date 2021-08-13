@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    Teste de conteúdo
                    <div class="row">
                        <div class="col-md-4">
                            <caixa qtd="55" titulo="Artigos" url="#" cor="orange" icone="ion ion-stats-bars"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="666" titulo="Artigos" url="#" cor="blue" icone="ion ion-person-add"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="27" titulo="Artigos" url="#" cor="red" icone="ion ion-pie-graph"></caixa>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>

@endsection
