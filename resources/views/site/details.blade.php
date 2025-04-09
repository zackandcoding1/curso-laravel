@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="row container"> <br>
    <div class="col s12 m6">
        <img src="{{$produto->imagem}}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h5> {{ $produto->nome }} </h5>
        <h5> R${{ number_format($produto->preco, 2, ',', '.') }} </h5>
        <p> {{ $produto->descricao }} </p>
        <p> Postado por: {{ $produto->user->firstname }} {{ $produto->user->lastname }} <br>
            Categoria: {{ $produto->categoria->nome }}
        </p>
        <button class="btn orange btn-large"> Comprar </button>
    </div>
</div>

@endsection