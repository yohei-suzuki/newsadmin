<h1>news create</h1>
<hr>

@include('commons.error_messages')

<form method="POST" action="{{ route('news.store') }}">
    {{ csrf_field() }}
    <input type="text" name="title">title<br>
    <textarea name="content" cols="45" rows="5"></textarea> content<br>
    <input type="text" name="cate">cate<br>
    <input type="text" name="repo">repo<br>
    <input type='submit' value="そうしん">
</form>