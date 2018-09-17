<h1>edit</h1>
<hr>

@include('commons.error_messages')

<form method="post" action="{{ route('news.update', ['id' => $news->id]) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    title<br>
    <input type="hidden" name="id" value="{{ $news->id }}">
    <input type="text" name="title" value="{{ $news->title }}"><br><br>
    content<br>
    <textarea name="content" cols="100" rows="15">{{ $news->content }}</textarea> <br><br>
    cate<br>
    <input type="text" name="cate" value="{{ $news->category_id }}"><br><br>
    repo<br>
    <input type="text" name="repo" value="{{ $news->repoter_id }}"><br><br>
    <input type='submit' value="送信">
</form>
<hr>
<h1>削除</h1>
この記事を削除します<br>
<form action="/news/{{$news->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="送信">
</form>
<hr>
<a href="{{ route('news.index') }}">back</a>