@extends('layouts.stdtemplate')

@section('customContent')
    <author-form-component 
    action={{$action}} 
    method={{$method}} 
    author-name="{{$authorName}}"
    author-id="{{$authorId}}">@csrf</author-form-component>
@endsection