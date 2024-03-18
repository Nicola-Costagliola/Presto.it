<nav class="navbar navbar-expand-lg bg-white shadow container justify-content-around">
    <div class="container-fluid">
        <!-- gli elementi inline possono contenere SOLO gli elementi inline senno devi bloccarlo o farlo diventare flex -->
        <a class="navbar-brand d-flex align-items-center " href="{{ route('home') }}">
            <img src="https://picsum.photos/50" class=" rounded-circle " alt="">
            <a class="testo-primario mb-0 link-primary link-offset-2 link-underline-opacity-25 text_title montserrat display-6 "
            href="{{ route('home') }}">{{ config('app.name') }}</a>
        </a>

        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collasableMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse " id="collasableMenu">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item dropdown my-auto ">
                    <a class="nav-link dropdown-toggle text-white montserrat p-0 ms-3 mt-md-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item text_color montserrat" href="{{ route('category.show', $category ) }}">
                            {{ $category->name }}</a></li>
                            <li><hr class="dropdown-divider "></li>
                            @endforeach
                        </ul>

                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link text-white montserrat p-0 ms-3 mt-md-2" href="{{ route('announcements.showAll') }}">Annunci</a>
                    </li>
                    @auth
                    <li class="nav-item ">
                        <a class="nav-link text-white p-0 ms-3 mt-md-2" href="{{ route('announcements.create') }}">Inserisci annuncio</a>
                    </li>

                    @if(Auth::user()->is_revisor)
                    <li class="nav-item  ">
                        <a class="nav-link text-white position-relative p-0 ms-3 mt-md-2" href="{{ route('revisor.manage') }}">Gestisci annunci
                            <span class=" position-absolute top-0 start-25 ms-2 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Announcement::toBeRevisionedCount()}}
                                <span class=" visually-hidden ">unread message</span>
                            </span>
                        </a>
                    </li>
                    @endif
                    @endauth
                </ul>

                <ul class="navbar-nav text-center  ">
                    <form class="d-flex " role="search" action="{{ route('announcements.search')}}" method="GET">
                        <input class="form-control p-0 ms-3 " name="searched" type="search" placeholder="Cerca" aria-label="Search">
                        <button class="btn btn-outline text-white montserrat ms-2 p-1 " type="submit">Cerca</button>
                    </form>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link bi bi-person-fill-add text-white montserrat  " href="/register"> Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bi bi-box-arrow-in-right text-white montserrat " href="/login"> Accedi</a>
                    </li>
                    <li class="nav-item">
                        <x-_locale lang="it" />
                        <x-_locale lang="en" />
                        <x-_locale lang="es" />
                    </li>
                    @endguest

                    @auth
                    <li class="nav-item my-auto">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class=" nav-link bi bi-person-fill-add text-white montserrat p-0 ms-3 " type="submit">Esci</button>
                        </form>
                    </li>
                    @endauth
                </ul>

            </ul>



        </div>
    </div>
</nav>