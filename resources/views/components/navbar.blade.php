<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <a class="navbar-brand" href=" {{ route('home')}} "> {{ config('app.name')}} </a>
        <button class="navbar-toggler end-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">

                <li class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorie
                </li>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{ route('category.show', $category) }}">{{ $category->name }}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @endforeach
                </ul>
            </div>

            <ul class="ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown" ><i class="bi bi-person-fill nav-link dropdown-toggle"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i></li>
                @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button class=" dropdown-item " type="submit">Esci</button>
                </form>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li><a class="dropdown-item" href=" # ">Gestisci utenti</a></li>
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
    </nav>
</div>
