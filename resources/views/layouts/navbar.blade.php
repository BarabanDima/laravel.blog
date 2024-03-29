<header class="market-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="marketing-index.html"><img>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="navbar-brand"b href="{{ route('home') }}">
                                <img src="/public/assets/front/images/version/market-logo.png"alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('brands') }}">Бренды</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.single', ['slug' => 'news']) }}">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.single', ['slug' => 'lexus']) }}">Make
                                Money</a>
                        </li> --}}
                    </ul>

                    <form class="form-inline" method="GET" action="{{ route('search') }}">
                        <input name="s" class="form-control mr-sm-2 is-invalid" type="text"
                            placeholder="Что нужно найти?">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
                    </form>
                </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->
