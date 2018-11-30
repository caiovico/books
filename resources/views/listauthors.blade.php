@extends('layouts.stdtemplate')

@section('customContent')
<author-list-component list-authors={{$authors}} default-url={{$url}}>
</author-list-component>
@endsection