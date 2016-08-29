<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Blog</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/articles">Articles</a></li>
            <li><a href="/tasks">Tasks</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active">{!! link_to_action('ArticleController@show', $latest->title, [$latest->id]) !!}</li>
                @if (Auth::guest())
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
        </ul>
    </div><!--/.nav-collapse -->
</div>
</nav>
