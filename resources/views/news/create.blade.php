<h1>news create</h1>
<hr>

@include('commons.error_messages')

<form method="POST" action="{{ route('news.store') }}">
    {{ csrf_field() }}
    title<br>
    <input type="text" name="title"> <br><br>
    content<br>
    <textarea name="content" cols="100" rows="15"></textarea> <br><br>
    cate<br>
    <input type="text" name="cate"><br><br>
    repo<br>
    <input type="text" name="repo"><br><br>
    <input type='submit' value="そうしん">
</form>