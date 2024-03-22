<nav class="navbar navbar-expand-md bg-white shadow container-fluid justify-content-around">
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
                    <a class="nav-link dropdown-toggle text-white montserrat p-0 ms-3 mt-md-0 mt-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('messages.categorie') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item text_color montserrat" href="{{ route('category.show', $category ) }}">
                            @switch(session('lang'))
                            @case('it')
                            {{ $category->name_it }}
                            @break
                            @case('es')
                            {{ $category->name_es }}
                            @break
                            @case('en')
                            {{ $category->name_en }}
                            @break
                            @default
                            {{ $category->name_it }}
                            @endswitch
                        </a></li>
                            <li><hr class="dropdown-divider "></li>
                            @endforeach
                        </ul>

                </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link text-white montserrat p-0 ms-3 mt-md-0 mt-2" href="{{ route('announcements.showAll') }}">{{ __('messages.annunci') }}</a>
                    </li>
                    @auth
                    <li class="nav-item ">
                        <a class="nav-link text-white p-0 ms-3 mt-md-0 mt-2" href="{{ route('announcements.create') }}">{{ __('messages.inserisciAnnuncio') }}</a>
                    </li>
                    
                    @if(Auth::user()->is_revisor)
                    <li class="nav-item  ">
                        <a class="nav-link text-white position-relative p-0 ms-3 mt-md-0 mt-2" href="{{ route('revisor.manage') }}">{{ __('messages.gestisciAnnunci') }}
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
                        <input class="form-control p-0 ms-3 mt-md-0 mt-2" name="searched" type="search" placeholder="Cerca" aria-label="Search">
                        <button class="btn btn-outline text-white montserrat ms-2 p-1 mt-md-0 mt-2" type="submit">{{ __('messages.cerca') }}</button>
                    </form>
                    @guest
                    <li class="nav-item my-auto">
                        <a class="nav-link bi bi-person-fill-add text-white montserrat ms-3 p-0 mt-md-0 mt-2" href="/register">{{ __('messages.registrati') }}</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link bi bi-box-arrow-in-right text-white ms-3 montserrat p-0 mt-md-0 mt-2" href="/login">{{ __('messages.accedi') }}</a>
                    </li>


                    @endguest
                    
                    @auth
                    <li class="nav-item my-auto">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class=" nav-link bi bi-person-fill-add text-white montserrat p-0 ms-3 mt-md-0 mt-2" type="submit">{{ __('messages.esci') }}</button>
                        </form>
                    </li>
                    @endauth

                    <li class="nav-item dropdown my-auto ">
                        <a class="nav-link dropdown-toggle text-white montserrat p-0 ms-3 mt-md-0 mt-2" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            @if(session('lang')=='')
                            <x-_locale lang="it" />
                            @endif
                            @if(session('lang')=='it')
                            <x-_locale lang="it" />
                            @endif
                            @if(session('lang')=='es')
                            <x-_locale lang="es" />
                            @endif
                            @if(session('lang')=='en')
                            <x-_locale lang="en" />
                            @endif

                        </a>
                        <ul class="dropdown-menu li-flag text-center">
                            <li class="dropdown-item p-1 ">
                                <x-_locale lang="it" />
                            </li>
                            <li class="dropdown-item p-1">
                                <x-_locale lang="en" />
                            </li>
                            <li class="dropdown-item p-1">
                                <x-_locale lang="es" />
                            </li>
                        </ul>

                    </li>






        </ul>
    </ul>




</div>
</div>
</nav>