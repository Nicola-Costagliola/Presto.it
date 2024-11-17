<div class=" container mb-5  mt-3 p-5 text_color">
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
            
            <div class="accordion accordion-flush shadow" id="accordionFlushExample">
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
                    
                    <div class="accordion-body text_color_body " style="background: linear-gradient(180deg, #163d68 0%, #246cbb 68%);">
                        
                        <div class="row">
                            
                            {{-- Carosello --}}
                            <div class="col-12  my-auto p-1">
                            
                                <div id="showCarousel" class="carousel slide shadow " data-bs-ride="carousel">
                                    
                                    @if($announcement->images->isNotEmpty())
                                    <div class="carousel-inner ">
                                        @foreach($announcement->images as $image)
                                        <div class="carousel-item p-4 shadow border rounded-2 text_color @if($loop->first)active   @endif"
                                            style="background:#eef1f3;">
                                            <div class="row">
                                                <div class=" text-center mb-3">
                                                    <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                                    aria-controls="collapseExample" class="bn632-hover bn26 shadow p-3">
                                                    Mostra le immagini
                                                </a>
                                                </div>
                                                <div class="col-12 col-md-6 collapse" id="collapseExample">
                                                    <img src="{{ $image->getUrl(400,250) }}" class="w-100 rounded mt-3" alt="...">
                                                </div>
                                                <div class="col-12 col-md-4  text-center text-md-start mx-auto ">
                                                    <h5>Revisione immagini:</h5>
                                                    <p><span class="{{ $image->adult }}"></span> Adulti</p>
                                                    <p><span class="{{ $image->spoof }}"></span> Satira</p>
                                                    <p><span class="{{ $image->medical }}"></span> Medicina</p>
                                                    <p><span class="{{ $image->violence }}"></span> Violenza</p>
                                                    <p><span class="{{ $image->racy }}"></span> Contenuto sessuale</p>
                                                </div>
                                                <div class="col-12 col-md-2 text-center text-md-start mx-auto">
                                                    <h5 class="">Tags</h5>
                                                    <div class="">
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
                                            <img src="https://picsum.photos/400/250" class=" w-50 rounded " alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://picsum.photos/400/250" class=" w-50 rounded " alt="...">
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
                <div class="col-12 col-md-4 align-content-center">
                    <p class=" text-info fs-4  ">Titolo: <span class="fs-5 text_color_body">{{ $announcement->title }}</span></p>
                    <p class=" text-info fs-4">Categoria: <span class="fs-5 text_color_body">{{ $announcement->category->name_it }}</span></p>
                    <p class=" text-info fs-4">Descrizione: <span class="fs-5 text_color_body w-100">{{ $announcement->body }}</span></p>
                </div>
                <div class="col-12 col-md-4 align-content-center">
                    <p class=" text-info fs-4">Prezzo: <span class="fs-5 text_color_body">{{ $announcement->price }} €</span></p>
                    <p class=" text-info fs-4">Autore: <span class="fs-5 text_color_body">{{ $announcement->user->name }}</span></p>
                    <p class=" text-info fs-4">Data creazione:: <span class="fs-5 text_color_body">{{ $announcement->created_at->format('d/m/Y') }}</span>
                    </p>
                </div>
                
                
                {{-- Bottoni --}}
                <div class="col-12 col-md-4 align-content-center text-center ">
                    
                    <form action="{{ route('revisor.acceptAnnouncement', $announcement) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="bn632-hover bn26  shadow">Accetta</button>
                    </form>
                    
                    <form action="{{ route('revisor.rejectAnnouncement',$announcement) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="bn632-hover bn26 shadow ">Rifiuta</button>
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
