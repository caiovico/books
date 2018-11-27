@extends('layouts.app')

@section('mainMenu')
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Livros <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('book.index') }}">
                Listar
            </a>
            <a class="dropdown-item" href="{{ route('book.create') }}">
                Novo
            </a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Autores <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('author.index') }}">
                Listar
            </a>
            <a class="dropdown-item" href="{{ route('author.create') }}">
                Novo
            </a>
        </div>
    </li>
@endsection 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$contentTitle}}</div>
                @isset($msg)
                    <p class="card-text">Mensagem quando for adicionado ou editado com sucesso</p>
                @endisset
                <div class="card-body">
                    @yield('customContent')
                    @yield('listContent')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection