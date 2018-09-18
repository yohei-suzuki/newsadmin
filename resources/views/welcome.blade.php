@extends('layouts.app')

@section('content')

    @if (Auth::check())
        <a href="{{ route('news.index') }}">news</a><br>
        <a href="{{ route('newscate.index') }}">news categorys</a><br>
        <a href="{{ route('newsrepo.index') }}">news repoters</a>
    @endif

@endsection
