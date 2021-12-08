<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('index') }}"><i class="fas fa-home fa-2x"></i>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul>
            <li>
                <a href="{{ route('reports.create') }}">記録する</a>
            </li>
            <li>
                <a href="{{ route('reports.show', Auth::id() )}}">グラフ</a>
            </li>
            <li>
                <a href="{{ route('users.show', Auth::id() )}}">アカウント</a>
            </li>
            <li>
                <a href="{{ route('karten.show', Auth::id() ) }}">カルテ</a>
            </li>
        </ul>
    </div>
</nav>