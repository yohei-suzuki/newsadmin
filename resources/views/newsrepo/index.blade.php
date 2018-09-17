<h1>newsRepo index</h1>
<hr>
<a href="{{ route('newsrepo.create') }}">create</a>
<hr>
@isset($repoters)
    @foreach($repoters as $repoter)
        {{ $repoter->id }} 
        {{ $repoter->name }} 
        <a href="newsrepo/{{ $repoter->id }}/edit">edit</a>
        <br>
    @endforeach
@endisset
<hr>
<a href="/">TOP</a>