@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$msg}} Livro</div>
                <div class="card-body">
                    <!-- <form method="POST" action="/book/{{$action}}"> -->
                    <form method="POST" action="{{ URL::route('book.store') }}">
                        @csrf
                        Nome: <input type="text" name="name"/><br>
                        Autor: <input type="text" name="author"/><br>
                        Ano: <input type="number" name="year"/><br>
                        <input type="submit" value="Registrar"/>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection