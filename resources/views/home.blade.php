@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    Teste de conteúdo
                    <div class="row">
                        <div class="col-md-4">
                            <painel titulo="Painel 1" cor="blue">
                                Teste
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Painel 2" cor="panel-warning">
                                Teste
                            </painel>
                        </div>
                        <div class="col-md-4">
                            <painel titulo="Painel 3" cor="orange">
                                Teste
                            </painel>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>

@endsection
