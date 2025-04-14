@extends('site.layout')
@section('title', 'Carrinho')
@section('conteudo')

    <div class="row container">

        @if ($mensagem = Session::get('sucesso'))

            <div class="card green">
                <div class="card-content white-text">
                    <span class="card-title">Parabéns!</span>
                    <p>{{ $mensagem }}</p>
                </div>
            </div>
        @endif

            <h5>Seu carrinho possui {{$itens->count()}} produtos.</h5>

            <table class="striped">
                <thead>
                    <th></th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th></th>
                </thead>

                <tbody>
                    @foreach ($itens as $item)
                    <tr>
                        <td><img src="{{ $item->options->image }}" alt="" width="150" class="responsive-img z-depth-1" style="border-radius: 8px;"></td>
                        <td>{{$item->name}}</td>
                        <td>R${{ number_format($item->price, 2, ',', '.')}}</td>
            
                        {{-- BOTÃO ATUALIZAR--}}
                        <form action="{{ route('site.atualizacarrinho') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                        <td><input style="width: 40px; font-weight: 900;" class="white center" min="1" type="number" name="qty" value="{{$item->qty}}"></td>
                        <td>
                        <button class="btn-floating waves-effect waves-light red"><i class="material-icons">refresh</i></button>
                        </form>
                        
                        {{-- BOTÃO REMOVER--}}
                        <form action="{{ route('site.removecarrinho') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                        <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                        </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row container center">
                <button class="btn waves-effect waves-light blue">Continuar comprando<i
                        class="material-icons right">arrow_back</i></button>
                <button class="btn waves-effect waves-light blue">Limpar carrinho<i
                        class="material-icons right">clear</i></button>
                <button class="btn waves-effect waves-light green">Finalizar pedido<i
                        class="material-icons right">check</i></button>
            </div>
        </div>

@endsection