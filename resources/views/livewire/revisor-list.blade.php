<div class=" container mb-5  mt-3 p-5 ">
    <div class="row">
        <div class="col-12 shadow p-3 ">
            <h1 class=" text-center display-4">Gestisci annunci</h1>
            <x-message />
        </div>
    </div>

    <div class="row">

        {{-- Implementazione according --}}

        {{-- la classe di bootstrap collapsaOne-- collapse{{$number}}  per l'according prende un numero in inglese che non riesco a passare e quindi cliccaldo su un annuncio me li apre tutti --}}

        <div class="col-12 shadow p-5">
            @foreach($announcements as $announcement)

                @if($announcement->is_accepted == null && $announcement->is_accepted == false )

                    <div class="accordion accordion-flush border" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header ">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse{{$announcement->id}}" aria-expanded="false" aria-controls="flush-collapse{{$announcement->id}}">
                                    <div class="col-6">
                                        {{ $announcement->title }}
                                    </div>
                                    <div class="col-6">
                                        @if($announcement->is_accepted === null)
                                        <span class="text-warning">Da revisonare</span>
                                        @elseif ($announcement->is_accepted === 0)
                                        <span class="text-danger">Scartato</span>
                                        @endif
                                    </div>
                                </button>
                            </h2>

                            <div id="flush-collapse{{$announcement->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                                <div class="accordion-body">

                                    <div class="row">

                                        {{-- Carosello --}}
                                        <div class="col-12 col-md-4 my-auto p-1">

                                            <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">

                                                @if($announcement->images->isNotEmpty())
                                                <div class="carousel-inner">
                                                    @foreach($announcement->images as $image)
                                                    <div class="carousel-item @if($loop->first)active @endif">
                                                        <img src="{{ $image->getUrl(400,300) }}" class=" d-block w-100 p-1 rounded" alt="...">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                @else
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="https://picsum.photos/400/300" class="d-block w-100  p-1 rounded " alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://picsum.photos/401/300" class=" d-block w-100 p-1 rounded " alt="...">
                                                    </div>
                                                </div>
                                                @endif

                                                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon bg-black " aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon bg-black " aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                    </button>

                                            </div>


                                        </div>

                                        {{-- Tags & labels --}}
                                        @if($announcement->images->isNotEmpty())
                                            <div class="col-12 col-md-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class=" mt-3 ">Tags</h5>
                                                    @foreach($announcement->images as $image)
                                                        <div class=" p-2 ">
                                                                {{-- @if($image->labels)
                                                                    @foreach($image->labels as $label)
                                                                    <p class=" d-inline ">{{ $label}} </p>
                                                                    @endforeach
                                                                @endif --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <h5>Revisione immagini:</h5>
                                                        <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                                        <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                                        <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                                        <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                                        <p>Contenuto sessuale: <span class="{{ $image->racy }}"></span></p>
                                                     @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        {{-- Descrizione --}}
                                        <div class="col-12 col-md-4">
                                            <p>Titolo: <span class="fs-5">{{ $announcement->title }}</span></p>
                                            <p>Categoria: <span class="fs-5">{{ $announcement->category->name_it }}</span></p>
                                            <p>Descrizione: <span class="fs-5">{{ $announcement->body }}</span></p>
                                            <p>Prezzo: <span class="fs-5">{{ $announcement->price }} €</span></p>
                                            <p>Autore: <span class="fs-5">{{ $announcement->user->name }}</span></p>
                                            <p>Data creazione:: <span class="fs-5">{{ $announcement->created_at->format('d/m/Y') }}</span>
                                            </p>

                                        </div>

                                        {{-- Bottoni --}}
                                        <div class="col-12 col-md-1 mt-md-auto ms-md-auto me-4 d-flex justify-content-around  d-md-block ">

                                            <form action="{{ route('revisor.acceptAnnouncement', $announcement) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success shadow mb-4">Accetta</button>
                                            </form>

                                            <form action="{{ route('revisor.rejectAnnouncement',$announcement) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success shadow mb-2">Rifiuta</button>
                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                @endif

            @endforeach

        </div>

    </div>
</div>
