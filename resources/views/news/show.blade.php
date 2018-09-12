<p>{{ $news->title }}</p>
<p>{{ $news->content }}</p>
<p>{{ $news->cate }}</p>
<p>{{ $news->repo }}</p>

<a href="{{ route('news.index') }}">back</a>