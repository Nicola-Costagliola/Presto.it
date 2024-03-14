<div class=" container mb-5 text-center mt-3 p-5 ">
    <div class="row">
        <div class="col-12 shadow p-3 ">
            <h1 class=" text-center display-4">Gestisci annunci</h1>
            <x-message />
        </div>
    </div>
    <div class="row">
        {{-- Tabella funzionante --}}
        <div class="col-12 shadow p-5">
            <table class="table table-bordered mt-3">
                <tr>
                    <th>#</th>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th>Stato</th>
                    <th></th>
                </tr>
                @foreach ($announcements as $announcement)
                @if($announcement->is_accepted == null && $announcement->is_accepted == false )
                <tr>
                    <td>{{ $announcement->id}}</td>
                    <td>{{$announcement->title}}</td>
                    <td>{{$announcement->category->name}}</td>
                    <td>
                        @if($announcement->is_accepted === null)
                        Da revisonare
                        @elseif ($announcement->is_accepted === 0)
                        Scartato
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-sm btn-primary " href="{{ route('revisor.index', $announcement) }}">Apri</a>
                    </td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        {{-- Implementazione according --}}

        {{-- la classe di bootstrap collapsaOne-- collapse{{$number}}  per l'according prende un numero in inglese che non riesco a passare e quindi cliccaldo su un annuncio me li apre tutti --}}

        {{-- <div class="col-12 shadow p-5">
            @foreach($announcements as $announcement)
            {{$number = $numbers}}


            @if($announcement->is_accepted == null && $announcement->is_accepted == false )

            <div class="accordion accordion-flush border" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header ">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{$number}}" aria-expanded="false" aria-controls="flush-collapse{{$number}}">
                            {{ $announcement->title }}
                        </button>
                    </h2>
                    <div id="flush-collapse{{$number}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-4 my-auto ">
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active ">
                                                <img src="https://picsum.photos/150/90" class="d-block w-100 h-100 " alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://picsum.photos/150/91" class="d-block w-100 h-100 " alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://picsum.photos/150/92" class="d-block w-100 h-100 " alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://picsum.photos/150/93" class="d-block w-100 h-100 " alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <p>Titolo: <span class="fs-5">{{ $announcement->title }}</span></p>
                                    <p>Categoria: <span class="fs-5">{{ $announcement->category->name }}</span></p>
                                    <p>Descrizione: <span class="fs-5">{{ $announcement->body }}</span></p>
                                    <p>Prezzo: <span class="fs-5">{{ $announcement->price }} €</span></p>
                                    <p>Autore: <span class="fs-5">{{ $announcement->user->name }}</span></p>
                                    <p>Data creazione:: <span class="fs-5">{{ $announcement->created_at->format('d/m/Y') }}</span>
                                    </p>

                                </div>
                                <div class="col-1 mt-auto ms-auto me-5">

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

                @endforeach --}}
        </div>
    </div>
</div>