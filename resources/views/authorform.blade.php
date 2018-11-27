@extends('layouts.stdtemplate')

@section('customContent')
    @if ($new)
        <form method="POST" action="{{ URL::route('author.store') }}">
        @csrf
        Nome: <input type="text" name="name"/><br>
    
    @else
    <form method="POST" action="{{ URL::route('author.update') }}">
        @csrf
        Nome: <input type="text" value={{$author->name}} name="name"/><br>
    @endif
        <input type="submit" value="Registrar Novo(a)"/>
    </form>
@endsection