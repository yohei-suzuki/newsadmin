<h1>edit</h1>
<hr>

@include('commons.error_messages')

<form method="post" action="{{ route('news.update', ['id' => $news->id]) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $news->id }}">
    <input type="text" name="title" value="{{ $news->title }}">title<br>
    <textarea name="content" cols="45" rows="5">{{ $news->content }}</textarea> content<br>
    <input type="text" name="cate" value="{{ $news->cate }}">cate<br>
    <input type="text" name="repo" value="{{ $news->repo }}">repo<br>
    <input type='submit' value="そうしん">
</form>