<h1>newsCate edit</h1>
<hr>

@include('commons.error_messages')

<form method="post" action="{{ route('newscate.update', ['id' => $category->id]) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    title<br>
    <input type="hidden" name="id" value="{{ $category->id }}">
    <input type="text" name="name" value="{{ $category->name }}"> 
    <input type="submit" name="" value="送信">
</form>
<hr>
<h1>削除</h1>
このカテゴリを削除します<br>
<form action="/newscate/{{$category->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="送信">
</form>
<hr>
<a href="{{ route('newscate.index') }}">news category top</a>
