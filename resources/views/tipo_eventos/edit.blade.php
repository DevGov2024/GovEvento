@extends('app')
@section('titulo')
    SEJA BEM VINDO
@stop

@section('conteudo')
    <form action="{{ route('alterar_evento', ['id' => $produto->id]) }}" method="POST">

        @csrf


        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br />




        <label for="">preço</label> <br />
        <input type="text" name="preco" value="{{ $produto->preco }}"> <br />









        <button>Salvar</button>

    </form>

@stop
