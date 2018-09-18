@extends('layouts.app')

@section('content')

<h1>newsRepo edit</h1>
<hr>

@include('commons.error_messages')
<h2>更新</h2>
<form method="post" action="{{ route('newsrepo.update', ['id' => $repoter->id]) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    repoter name 
    <input type="hidden" name="id" value="{{ $repoter->id }}">
    <input type="text" name="name" value="{{ $repoter->name }}"> 
    <input type="submit" name="" value="送信">
</form>
<hr>
<h2>削除</h2>
このrepoterを削除します<br>
<form action="/newsrepo/{{$repoter->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="送信">
</form>
<hr>
<a href="{{ route('newsrepo.index') }}">news repoter top</a>

@endsection