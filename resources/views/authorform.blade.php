@extends('layouts.stdtemplate')

@section('customContent')
    <author-form-component 
    action={{$action}} 
    author-name="{{$authorName}}"
    author-id="{{$authorId}}">
        {{method_field($method)}}
        @csrf
    </author-form-component>
@endsection