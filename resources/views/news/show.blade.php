<p>{{ $news->title }}</p>
<p>{{ $news->content }}</p>
<p>{{ $news->category_id }}</p>
<p>{{ $news->repoter_id }}</p>

<a href="{{ route('news.index') }}">back</a>