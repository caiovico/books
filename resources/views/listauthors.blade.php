@extends('layouts.stdtemplate')

@section('customContent')
   <ul class="list-group list-group-flush">
   @foreach ($authors as $author)
      <li class="list-group-item">
         <a href={{route('author.show', ['id' => $author->id])}}> {{$author->name}} </a>
         <a href={{route('author.edit', ['id' => $author->id])}}> <small>Editar</small> </a>
         <a href={{route('author.destroy', ['id' => $author->id])}}> <small>Excluir</small> </a>
      
      </li>
   @endforeach
   </ul>
   {{ $authors->links() }}
@endsection