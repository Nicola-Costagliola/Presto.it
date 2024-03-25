
<div class="container-fluid fixed-top p-0 navbar shadow"  >
        <!-- gli elementi inline possono contenere SOLO gli elementi inline senno devi bloccarlo o farlo diventare flex -->
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">

                    <small class="me-3">
                        <a href="#" class="text-white"> roma, itali</a>
                    </small>

                    <small class="me-3">
                        <a href="#" class="text-white"> roma, itali</a>
                    </small>

                </div>

                <div class="top-link pe-2">

                    <small class="me-3">
                        <a href="#" class="text-white"> roma, itali</a>
                    </small>

                    <small class="me-3">
                        <a href="#" class="text-white"> roma, itali</a>
                    </small>

                    <small class="me-3">
                        <a href="#" class="text-white"> roma, itali</a>
                    </small>

                </div>
            </div>
        </div>

        
        <div class="container px-0  h-nav">
            <nav class="navbar navbar-light navbar-expand-xl ">

                    <a class="navbar-brand d-flex align-items-center " href="{{ route('home') }}">
                        <img src="https://picsum.photos/50" class=" rounded-circle " alt="">
                        <a class="testo-primario text_color display-6 "
                        href="{{ route('home') }}">{{ config('app.name') }}
                        </a>
                    </a>
                    
                    <button class="navbar-toggler py-2 px-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collasableMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse text-center" id="collasableMenu">

                        <div class="navbar-nav mx-auto">
                            <ul class="navbar-nav mx-auto text-center">
                                <li class="nav-item dropdown my-auto ">
                                    <a class="nav-link dropdown-toggle text_color_body p-0 ms-3 mt-md-0 mt-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('messages.categorie') }}
                                    </a>

                                        <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                            <li>
                                                <a class="dropdown-item nav-link nav-item  " href="{{ route('category.show', $category) }}">
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
                                                </a>
                                            </li>

                                            <li><hr class="dropdown-divider "></li>

                                    @endforeach
                                        </ul>

                                </li>

                                <li class="nav-item my-auto">
                                    <a class="nav-link p-0 ms-3 mt-md-0 mt-2 " href="{{ route('announcements.showAll') }}">{{ __('messages.annunci') }}</a>
                                </li>

                                @auth

                                <li class="nav-item ">
                                    <a class="nav-link p-0 ms-3 mt-md-0 mt-2" href="{{ route('announcements.create') }}">{{ __('messages.inserisciAnnuncio') }}</a>
                                </li>
                                
                                @if(Auth::user()->is_revisor)

                                <li class="nav-item  ">
                                    <a class="nav-link position-relative p-0 ms-3 mt-md-0 mt-2 " href="{{ route('revisor.manage') }}">{{ __('messages.gestisciAnnunci') }}
                                        <span class=" position-absolute top-0 start-25 ms-2 translate-middle badge rounded-pill  bg-danger">
                                            {{ App\Models\Announcement::toBeRevisionedCount()}}
                                            <span class=" visually-hidden ">unread message</span>
                                        </span>
                                    </a>
                                </li>

                                @endif
                                @endauth

                            </ul>
                        </div>


                        <div class="d-flex m-3 me-0 navbar-nav mx-auto">
                            <ul class="navbar-nav text-center ">

                                <form class="d-flex " role="search" action="{{ route('announcements.search')}}" method="GET">
                                    <input class="form-control p-0 ms-3 mt-md-0 mt-2 rounded-pill" name="searched" type="search" placeholder="  Cerca" aria-label="Search">
                                    <button class="btn btn-outline ms-2 p-1 mt-md-0 mt-2" type="submit">{{ __('messages.cerca') }}</button>
                                </form>

                            @guest

                                <li class="nav-item my-auto">
                                    <a class="nav-link bi bi-person-fill-add  ms-3 p-0 mt-md-0 mt-2 " href="/register">{{ __('messages.registrati') }}</a>
                                </li>

                                <li class="nav-item my-auto">
                                    <a class="nav-link bi bi-box-arrow-in-right  ms-3  p-0 mt-md-0 mt-2  " href="/login">{{ __('messages.accedi') }}</a>
                                </li>

                            @endguest
                            
                            @auth

                                <li class="nav-item my-auto">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class=" nav-link bi bi-person-fill-add p-0 ms-3 mt-md-0 mt-2" type="submit">{{ __('messages.esci') }}</button>
                                    </form>
                                </li>

                            @endauth

                                <li class="nav-item dropdown my-auto ">

                                    <a class="nav-link dropdown-toggle p-0 ms-3 mt-md-0 mt-2" href="#" role="button"
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
                        </div>

                    </div>

            </nav>

        </div>
</div>
