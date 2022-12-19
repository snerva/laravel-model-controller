<header class="bg-black text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MF</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Films</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>