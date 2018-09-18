@extends('layouts.app')

@section('content')

<h1>edit</h1>
<hr>

@include('commons.error_messages')
<h2>更新</h2>
<form method="post" action="{{ route('news.update', ['id' => $news->id]) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    title<br>
    <input type="hidden" name="id" value="{{ $news->id }}">
    <input type="text" name="title" size="200" value="{{ $news->title }}"><br><br>
    
    content<br>
    <textarea name="content" cols="200" rows="15">{{ $news->content }}</textarea> <br><br>
    
    cate<br>
    <?php $cate = $news->category_id; ?>
    <select name="cate">
        @foreach($categorys as $category)
            <option value="{{ $category->id }}" @if(old('cate', $cate)==$category->id) selected  @endif>{{ $category->name }}</option>
        @endforeach
    </select>
    <br><br>
    
    repo<br>
    <?php $repo = $news->repoter_id; ?>
    <select name="repo">
        @foreach($repoters as $repoter)
            <option value="{{ $repoter->id }}" @if(old('repo', $repo)==$repoter->id) selected  @endif>{{ $repoter->name }}</option>
        @endforeach
    </select>
    <br><br>
    
    <input type='submit' value="送信">
</form>
<hr>
<h2>削除</h2>
この記事を削除します<br>
<form action="/news/{{$news->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="送信">
</form>
<hr>
<a href="{{ route('news.index') }}">back</a>

@endsection