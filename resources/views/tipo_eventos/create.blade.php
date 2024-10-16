@extends('app')
@section('titulo')
 Seu formulário
@stop

@section('conteudo')
<form action="{{route('registrar_evento')}}" method="POST">



    @csrf

    <label for="">Nome</label> <br/>
    <input type="text" name="nome"> <br/>

    <label for= "">Preço</label> <br/>
    <input type="text" name="preco"> <br/>

    <button>Salvar</button>
</form>
@stop
