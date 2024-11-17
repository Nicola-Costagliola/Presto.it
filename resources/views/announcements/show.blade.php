<x-layout>
    <div class="container text-center mt-3 p-2">
        <div class="row">
            <div class="col-12 shadow p-3">
                <h1 class="fs-2 montserrat fw-semibold text-info  "><span class="text_color">Annuncio: </span>{{ $announcement->title }}</h1>
            </div>
        </div>
    </div>
    <div>
        <x-success />
    </div>
    <div class="container p-0 mt-3">
        <x-back />
    </div>

    <div class="container">
            <div class="row">
                <div class="col-12 shadow p-3">

                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">

                        @if($announcement->images->isNotEmpty())

                            <div class="carousel-inner">
                                @foreach($announcement->images as $image)
                                <div class="carousel-item text-center  @if($loop->first)active @endif">
                                    <img src="{{ $image->getUrl(400,250) }}" class=" p-1 rounded" alt="...">
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/400/250" class="img-fluid p-1 rounded " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/401/250" class="img-fluid p-1 rounded " alt="...">
                                </div>
                            </div>
                        @endif

                            <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                                <span class="bi bi-caret-left-fill text-black fs-1" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                                <span class="bi bi-caret-right-fill text-black fs-1" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                    </div>

                </div>
                {{-- fine carosello --}}
                @if(session()->has('message'))
                <div class="alert alert-success montserrat mt-3 ">
                    {{ session('message') }}
                </div>
                @endif

                <div class="col-12 col-md-8 p-2 mt-4">
                    <div class="col-12 ms-2">
                        <p class="montserrat fs-5 text-info "><span class="text_color fw-semibold ">Titolo: </span>{{ $announcement->title }}</p>
                        <p class="montserrat fs-5 text-info "><span class="text_color fw-semibold ">Descrizione: </span>{{ $announcement->body }}</p>
                        <p class="montserrat fs-4 text-info  "><strong><span class="text_color">Prezzo: </span>{{$announcement->price}} €</strong></p>
                        <p><a class=" bn632-hover bn26 shadow p-3 mx-0  mt-5 montserrat "
                            href=" {{route('category.show', ['category' => $announcement->category]) }} ">
                            Esplora la categoria: {{$announcement->category->name_it}}
                        </a></p>
                    </div>
                </div>
                @auth
                <div class="col-12 col-md-4 p-2 mt-4 ">
                    <div class="">
                        <x-message />
                        <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                        aria-controls="collapseExample" class="bn632-hover bn26 shadow p-3 mt-5 ">
                        Contatta il venditore
                        </a>
                    </div>
                    <div class="collapse mt-4 " id="collapseExample">
                        <div class=" card card-body ">
                        <livewire:send-email :announcement="$announcement" />
                        </div>
                    </div>
                    <div class="">
                        @if(Auth::user()->is_revisor)
                        <form action="{{ route('revisor.reviewedAnnouncement', $announcement) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bn632-hover bn26 shadow">Da revisionare</button>
                        </form>
                        @endif
                    </div>
                    @endauth

                </div>

            </div>

    </div>


</x-layout>
