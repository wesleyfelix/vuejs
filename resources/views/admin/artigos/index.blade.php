@extends('layouts.app')

@section('content')

    <pagina tamanho="12">
        <painel titulo="Listar de artigos">
            <tabela-lista
                    v-bind:titulos="['#','Título', 'descricao']"
                    v-bind:itens="[[1,'php', 'curso de php'], [2,'vue', 'teste']]"
                    criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="54654654654"
            ></tabela-lista>
        </painel>
    </pagina>

@endsection
