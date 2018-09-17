<p>{{ $news->title }}</p>
<p>{{ $news->content }}</p>
<p>{{ $news->category_id }}  {{ $category }}</p>
<p>{{ $news->repoter_id }}  {{ $repoter }}</p>

<a href="{{ route('news.index') }}">back</a>