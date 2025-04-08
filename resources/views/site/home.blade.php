@extends('site.layout')
@section('title', 'Home')
@section('conteudo')

    <div class="row container">
        @foreach ($produtos as $produto)
            <div class="col s12 m7">
                <div class="card">
                    <div class="card-image">
                    <img src="{{ $produto->imagem }}">
                    <a href="{{ route('site.details', $produto->slug )}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ $produto->nome }}</span>
                    <p>{{ Str::limit($produto->descricao, 20)}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row center">
        {{ $produtos->links('custom.pagination') }}
    </div>
@endsection

    {{-- @include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

    @component('components.sidebar')
        @slot('paragrafo')
            Texto qualquer vindo do slot
        @endslot
    @endcomponent

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush --}}

    {{-- Estruturas de controle --}}

    {{-- @if ($nome == 'Isaac')
        true
    @else
        false
    @endif --}}

    {{-- @switch($idade)
        @case(25)
            idade está ok
            @break
        @case(26)
            idade está errada
            @break
        @default
        default            
    @endswitch --}}

    {{-- @isset($nome)
        existe
    @endisset --}}

    {{-- @empty($nome)
        variável vazia
    @endempty --}}

    {{-- @guest
        não está autenticado
    @endguest --}}

    {{-- Estruturas de repetição --}}

    {{-- @for ($i = 0; $i <= 10; $i++)
        valor atual é {{ $i }} <br>
    @endfor --}}

    {{-- @php $i = 0; @endphp

    @while ($i <= 15)
        valor atual com o while é {{ $i }} <br>
        @php $i++ @endphp
    @endwhile --}}

    {{-- @forelse ($frutas as $fruta)
        {{ $fruta }} <br>
    @empty
        array está vazio
    @endforelse --}}