<h1>news index</h1>
<hr>
<a href="{{ route('news.create') }}">create</a>
<hr>
@isset($news)
    @foreach($news as $d)
        <a href="{{ route('news.show', ['id' => $d->id]) }}">{{ $d->id }}</a> 
        {{ $d->title }} 
        <a href="news/{{ $d->id }}/edit">edit</a><br>
    @endforeach
@endisset
<hr>
<a href="/">TOP</a>