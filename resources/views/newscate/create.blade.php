@extends('layouts.app')

@section('content')

<h1>newsCate create</h1>
<hr>

@include('commons.error_messages')

<form method="POST" action="{{ route('newscate.store') }}">
    {{ csrf_field() }}
    category name <input type="text" name="name"> 
    <input type='submit' value="送信">
</form>
<hr>
<a href="{{ route('newscate.index') }}">news category top</a>

@endsection