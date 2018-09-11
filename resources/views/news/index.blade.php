<h1>news index</h1>

<hr>
@isset($news)
    @foreach($news as $d)
        <a href="{{ route('news.show', ['id' => $d->id]) }}">{{ $d->id }}</a> {{ $d->title }} <br>
    @endforeach
@endisset
<hr>
<a href="/">TOP</a>