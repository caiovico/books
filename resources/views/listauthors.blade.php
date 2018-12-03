@extends('layouts.stdtemplate')

@section('customContent')
<author-list-component list-authors={{$authors}} default-url={{$url}}>
    {{method_field('DELETE')}}
    @csrf
</author-list-component>
@endsection