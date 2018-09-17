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
    <select name="cate">
        @foreach($categorys as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <br>
    <br>
    repo<br>
    <select name="repo">
        @foreach($repoters as $repoter)
            <option value="{{ $repoter->id }}">{{ $repoter->name }}</option>
        @endforeach
    </select>
    <br>
    <br>
    <input type='submit' value="そうしん">
</form>

