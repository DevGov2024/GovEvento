@extends('app')
@section('titulo')
    SEJA BEM VINDO
@stop

@section('conteudo')
    <form action="{{ route('registrar_evento') }}" method="POST">
        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
        <label for="">preço</label> <br />
        <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
    </form>
@stop
