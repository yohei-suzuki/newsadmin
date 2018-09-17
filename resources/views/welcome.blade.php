@if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }} 
        
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <hr>
        <a href="{{ route('news.index') }}">news</a><br>
        <a href="{{ route('newscate.index') }}">news categorys</a><br>
        <a href="{{ route('newsrepo.index') }}">news repoters</a>
@else
    <a href="{{ route('login') }}">login</a>
@endif