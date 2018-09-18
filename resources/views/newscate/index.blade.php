@extends('layouts.app')

@section('content')

<h1>newsCate index</h1>
<hr>
<a href="{{ route('newscate.create') }}">create</a>
<hr>
@isset($categorys)
    @foreach($categorys as $category)
        {{ $category->id }} 
        {{ $category->name }} 
        <a href="newscate/{{ $category->id }}/edit">edit</a>
        <br>
    @endforeach
@endisset
<hr>
<a href="/">TOP</a>

@endsection