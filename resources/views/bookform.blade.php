@extends('layouts.stdtemplate')

@section('customContent')
    @if ($new)
        <form method="POST" action="{{ URL::route('book.store') }}">
    @else
        <form method="POST" action="{{ URL::route('book.update') }}">
    @endif
        @csrf
        Nome: <input type="text" name="name"/><br>
        Autor: <input type="text" name="author"/><br>
        Ano: <input type="number" name="year"/><br>
        <input type="submit" value="Registrar"/>
    </form>
@endsection