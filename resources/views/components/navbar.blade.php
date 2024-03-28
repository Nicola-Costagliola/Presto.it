
<div class="container-fluid fixed-top p-0 navbar shadow mb-3 "  >

        <div class="container ">
            <nav class="navbar navbar-light navbar-expand-lg container-fluid p-0 ">

                    <a class="navbar-brand d-flex align-items-center " href="{{ route('home') }}">
                        <img src="{{asset('Logo/Logo2-no-bg.png')}}" class="img-fluid" style="height: 50px" alt="resources/images/Logo">
                        <a class="testo-primario text_color display-6 "
                        href="{{ route('home') }}"></a>
                    </a>

                    <button class="navbar-toggler collapsed ms-auto " type="button" data-bs-toggle="collapse" data-bs-target="#collasableMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse text-center" id="collasableMenu">

                        <div class="navbar-nav mx-auto ">
                            <ul class="navbar-nav mx-auto text-center ">
                                <li class="nav-item dropdown my-auto ">
                                    <a class="nav-link dropdown-toggle text_color_body p-0 ms-3 mt-md-0 mt-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('messages.categorie') }}
                                    </a>

                                        <ul class="dropdown-menu ">
                                    @foreach ($categories as $category)
                                            <li>
                                                <a class="dropdown-item nav-link nav-item  text_color" href="{{ route('category.show', $category) }}">
                                                @switch(App::currentLocale())
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

                                <li class="nav-item my-auto ">
                                    <a class="nav-link p-0 ms-3 mt-md-0 mt-2 text_color_body" href="{{ route('announcements.showAll') }}">{{ __('messages.annunci') }}</a>
                                </li>

                                @auth

                                <li class="nav-item ">
                                    <a class="nav-link p-0 ms-3 mt-md-0 mt-2 text_color_body" href="{{ route('announcements.create') }}">{{ __('messages.inserisciAnnuncio') }}</a>
                                </li>

                                @if(Auth::user()->is_revisor)

                                <li class="nav-item  ">
                                    <a class="nav-link position-relative p-0 ms-3 mt-md-0 mt-2 text_color_body" href="{{ route('revisor.manage') }}">{{ __('messages.gestisciAnnunci') }}
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


                        <div class="d-flex m-3 me-0 navbar-nav ms-auto ">
                            <ul class="navbar-nav text-center ">

                                <form class="d-flex " role="search" action="{{ route('announcements.search')}}" method="GET">
                                    <input class="form-control p-0 ms-3 mt-md-0 mt-2 rounded-pill text_color_body" name="searched" type="search" placeholder="  Cerca" aria-label="Search">
                                    <button class="btn  ms-2 p-2 mt-md-0 mt-2 rounded-5 " type="submit">{{ __('messages.cerca') }}</button>
                                </form>

                            @guest

                                <li class="nav-item my-auto">
                                    <a class="nav-link bi bi-person-fill-add  ms-3 p-0 mt-md-0 mt-2 text_color_body" href="/register">{{ __('messages.registrati') }}</a>
                                </li>

                                <li class="nav-item my-auto">
                                    <a class="nav-link bi bi-box-arrow-in-right  ms-3  p-0 mt-md-0 mt-2  text_color_body" href="/login">{{ __('messages.accedi') }}</a>
                                </li>

                            @endguest

                            @auth

                                <li class="nav-item my-auto mx-auto ">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class=" nav-link bi bi-person-fill-add p-0 ms-3 mt-md-0 text_color_body mt-2" type="submit">{{ __('messages.esci') }}</button>
                                    </form>
                                </li>

                            @endauth

                                <li class="nav-item dropdown my-auto">

                                    <a class="nav-link dropdown-toggle p-0 ms-3 mt-md-0 mt-2" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        @switch(App::currentLocale())
                                                @case('it')
                                        <x-_locale lang="it" />
                                                @break
                                                @case('es')
                                        <x-_locale lang="es" />
                                                @break
                                                @case('en')
                                        <x-_locale lang="en" />
                                                @break
                                                @default
                                        <x-_locale lang="it" />
                                        @endswitch

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
