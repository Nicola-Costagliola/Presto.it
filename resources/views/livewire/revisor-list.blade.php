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
                                        <div class="col-12 col-md-9 my-auto p-1">

                                            <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">

                                                @if($announcement->images->isNotEmpty())
                                                @foreach($announcement->images as $image)
                                                <div class="carousel-inner">
                                                    <div class="row">
                                                        <div class="carousel-item d-md-flex   @if($loop->first)active @endif">
                                                            <div class="col-12 col-md-6">
                                                                <img src="{{ $image->getUrl(400,300) }}" class=" d-block w-100 p-1 rounded" alt="...">
                                                            </div>
                                                            <div class="col-12 col-md-4 ps-2 my-auto text-center ">
                                                                <h5>Revisione immagini:</h5>
                                                                <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                                                <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                                                <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                                                <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                                                <p>Contenuto sessuale: <span class="{{ $image->racy }}"></span></p>
                                                            </div>
                                                            <div class="col-12 col-md-2 my-auto mx-auto  ">
                                                                <h5 class="">Tags</h5>
                                                                <div class=" p-2 ">
                                                                         @if($image->labels)
                                                                            @foreach($image->labels as $label)
                                                                            <p class=" d-inline ">{{ $label}} </p>
                                                                            @endforeach
                                                                        @endif
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                    <span class="bi bi-caret-left-fill text-black fs-1 " aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                                                    data-bs-slide="next">
                                                    <span class="bi bi-caret-right-fill text-black fs-1 " aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                    </button>

                                            </div>
                                        
                                            
                                        </div>

                                        {{-- Descrizione --}}
                                        <div class="col-12 col-md-3">
                                            <p>Titolo: <span class="fs-5">{{ $announcement->title }}</span></p>
                                            <p>Categoria: <span class="fs-5">{{ $announcement->category->name_it }}</span></p>
                                            <p>Descrizione: <span class="fs-5">{{ $announcement->body }}</span></p>
                                            <p>Prezzo: <span class="fs-5">{{ $announcement->price }} €</span></p>
                                            <p>Autore: <span class="fs-5">{{ $announcement->user->name }}</span></p>
                                            <p>Data creazione:: <span class="fs-5">{{ $announcement->created_at->format('d/m/Y') }}</span>
                                            </p>
                                
                                        </div>

                                    </div>
                                    {{-- Bottoni --}}
                                    <div class="col-12 d-flex justify-content-center mt-2 ">
                                    
                                        <form action="{{ route('revisor.acceptAnnouncement', $announcement) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success shadow ">Accetta</button>
                                        </form>
                                        
                                        <form action="{{ route('revisor.rejectAnnouncement',$announcement) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success shadow ms-1 ">Rifiuta</button>
                                        </form>

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

