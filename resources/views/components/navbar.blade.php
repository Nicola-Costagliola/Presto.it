<nav class="navbar navbar-expand-lg bg-white shadow-sm container">
    <div class="container-fluid px-5 ">
        <!-- gli elementi inline possono contenere SOLO gli elementi inline senno devi bloccarlo o farlo diventare flex -->
        <a class="navbar-brand d-flex align-items-center " href="#">
            <img src="https://picsum.photos/50" class="me-3 rounded-circle " alt="">
            <a class="testo-primario mb-0 " href="{{ route('home') }}">{{ config('app.name') }}</a>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collasableMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="collasableMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{ route('category.show', $category ) }}">{{ $category->name }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endforeach
                    </ul>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="announcements.html">Annunci</a>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center "> 
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Accedi</a>
                </li>
                @endguest
                @auth
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class=" dropdown-item " type="submit">Esci</button>
                    </form>
                </li>
                @endauth
            </ul>
            
        </ul>
    </div>
</div>
</nav>