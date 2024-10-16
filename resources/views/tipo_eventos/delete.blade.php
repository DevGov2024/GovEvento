@extends('app')
@section('titulo')
    SEJA BEM VINDO
@stop

@section('conteudo')
    <form action="{{ route('excluir_evento', ['id' => $produto->id]) }}" method="POST">

        @csrf


        <label for="">Tem certeza que deseja excluir esse produto?</label> <br />
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br />

        <button>Sim</button>

    </form>
@stop
