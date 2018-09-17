<h1>newsRepo create</h1>
<hr>

@include('commons.error_messages')

<form method="POST" action="{{ route('newsrepo.store') }}">
    {{ csrf_field() }}
    repoter name <input type="text" name="name"> 
    <input type='submit' value="送信">
</form>
<hr>
<a href="{{ route('newsrepo.index') }}">news repoter top</a>
