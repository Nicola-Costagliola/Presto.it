<div class=" container mt-3 ">
    <h4 class=" text-center ">Gestisci annunci</h4>
    <div class=" mt-3 ">
        
        <x-message />
        {{-- Tabella funzionante --}}
        {{-- <table class="table table-bordered mt-3">
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
        </table> --}}
        
        {{-- Implementazione according --}}
        @foreach($announcements as $announcement)
        @endforeach
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        {{ $announcement->title }}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-4 my-auto ">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active ">
                                            <img src="https://picsum.photos/150/80" class="d-block w-100 h-100 " alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://picsum.photos/150/81" class="d-block w-100 h-100 " alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://picsum.photos/150/82" class="d-block w-100 h-100 " alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://picsum.photos/150/83" class="d-block w-100 h-100 " alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-8">
                                <h3> {{ $announcement->title }}</h3>
                                <p> {{ $announcement->category->name }}</p>
                                <p> {{ $announcement->body }}</p>
                                <p> {{ $announcement->price }} €</p>
                                <p> {{ $announcement->created_at->format('d/m/Y') }}</p>
                                <p>{{ $announcement->user->name }}</p>
                                <form action="{{ route('revisor.acceptAnnouncement', $announcement) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow ">Accetta</button>
                                </form>
                                
                                <form action="{{ route('revisor.rejectAnnouncement',$announcement) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow ">Rifiuta</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>
