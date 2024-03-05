<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"> {{ config('app.name')}} </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about us') }}">Chi sono</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all.articles') }}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list.anime') }}">Anime</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto <strong> {{ auth()->user()->name }} </strong>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href=" {{ route('account.index') }}">Gestisci utenti</a></li>
                        <li><a class="dropdown-item" href=" {{ route('todo') }}">ToDo List</a></li>
                        <li><a class="dropdown-item" href=" {{ route('articles.index') }}">I miei articoli</a></li>
                        <li><a class="dropdown-item" href=" {{ route('articles.create') }}">Crea Articolo</a></li>
                        <li><a class="dropdown-item" href=" {{ route('categories.index') }}">Le mie categorie</a></li>
                        <li><a class="dropdown-item" href=" {{ route('categories.create') }}">Crea categoria</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class=" dropdown-item " type="submit">Esci</button>
                            </form>
                        </li>
                    </ul>
                    @endauth
                    @guest
                        <li class=" nav-item ">
                            <a class=" nav-link " href="/register"> Registrati </a>
                        </li>
                        <li  class=" nav-item ">
                            <a class=" nav-link " href="/login"> Accedi </a>
                        </li>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>