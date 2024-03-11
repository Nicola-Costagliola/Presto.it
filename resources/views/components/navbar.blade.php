<nav class="navbar navbar-expand-lg bg-white shadow container">
    <div class="container-fluid px-5 ">
        <!-- gli elementi inline possono contenere SOLO gli elementi inline senno devi bloccarlo o farlo diventare flex -->
        <a class="navbar-brand d-flex align-items-center " href="{{ route('home') }}">
            <img src="https://picsum.photos/50" class="me-3 rounded-circle " alt="">
            <a class="testo-primario mb-0 link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-white montserrat"
             href="{{ route('home') }}">{{ config('app.name') }}</a>
        </a>

        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#collasableMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="collasableMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white montserrat" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item text_color montserrat" href="{{ route('category.show', $category ) }}">{{ $category->name }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endforeach
                    </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link text-white montserrat" href="{{ route('announcements.showAll') }}">Annunci</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('announcements.create') }}">Inserisci annuncio</a>
                </li>
                @if(Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link text-white position-relative " aria-current="page" 
                    href="{{ route('revisor.index') }}">
                    Annunci da revisionare
                    <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ App\Models\Announcement::toBeRevisionedCount()}}
                        <span class=" visually-hidden ">unread message</span>
                    </span>
                </a>
                    
                </li>
                @endif
                @endauth
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center ">
                @guest
                <li class="nav-item">
                    <a class="nav-link bi bi-person-fill-add text-white montserrat" href="/register"> Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bi bi-box-arrow-in-right text-white montserrat" href="/login"> Accedi</a>
                </li>
                @endguest
                @auth
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class=" dropdown-item bi bi-arrow-bar-left  text-white montserrat" type="submit">Esci</button>
                    </form>
                </li>
                @endauth
            </ul>

        </ul>
    </div>
</div>
</nav>