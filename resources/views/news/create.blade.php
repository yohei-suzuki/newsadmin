<h1>news create</h1>
<hr>

@include('commons.error_messages')

<form method="POST" action="{{ route('news.store') }}">
    {{ csrf_field() }}
    title<br>
    <input type="text" name="title" size="200" value="{{ old('title') }}"> <br><br>
    content<br>
    <textarea name="content" cols="200" rows="40">{{ old('content') }}</textarea> <br><br>
    cate<br>
    <select name="cate">
        @foreach($categorys as $category)
            <option value="{{ $category->id }}" @if(old('cate')==$category->id) selected  @endif>{{ $category->name }}</option>
        @endforeach
    </select>
    <br>
    <br>
    repo<br>
    <select name="repo">
        @foreach($repoters as $repoter)
            <option value="{{ $repoter->id }}" @if(old('repo')==$repoter->id) selected  @endif>{{ $repoter->name }}</option>
        @endforeach
    </select>
    <br>
    <br>
    <input type='submit' value="そうしん">
</form>
<hr>
<a href="{{ route('news.index') }}">back</a>

