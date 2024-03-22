<x-layout>
    <div class="container text-center mt-3 p-2">
        <div class="row">
            <div class="col-12 shadow p-3">
                <h1 class="display-5 text_color montserrat">Annuncio {{ $announcement->title }}</h1>
            </div>
        </div>
    </div>
    
    <div class="container text-center">
            <div class="row">
                <div class="col-12 shadow p-3">
                
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
        
                        @if($announcement->images->isNotEmpty())

                            <div class="carousel-inner">
                                @foreach($announcement->images as $image)
                                <div class="carousel-item @if($loop->first)active @endif">
                                    <img src="{{ $image->getUrl(400,300) }}" class="img-fluid p-1 rounded" alt="...">
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/400/300" class="img-fluid p-1 rounded " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/401/300" class="img-fluid p-1 rounded " alt="...">
                                </div>
                            </div>
                        @endif

                            <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-black " aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-black " aria-hidden="true"></span>
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
                
                <div class="row">
                    <div class="col-12 mt-3">
                        <h3 class="display-5 text_color_body montserrat">{{ $announcement->title }}</h3>
                        
                        <p class="card-text text_color_body montserrat">Categoria: {{ $announcement->category->name_it }}</p>
                        <p class="card-text text_color_body montserrat">Descrizione: {{ $announcement->body }}</p>
                        <p class="card-text text_color_body montserrat"><strong>Prezzo: {{$announcement->price}} €</strong></p>
                        
                        <x-back />
                        
                        <p><a class="btn shadow btn-secondary text_color_body montserrat "
                            href=" {{route('category.show', ['category' => $announcement->category]) }} ">
                            Esplora la categoria {{$announcement->category->name_it}}
                        </a></p>
                        @auth
                        @if(Auth::user()->is_revisor)
                        <form action="{{ route('revisor.reviewedAnnouncement', $announcement) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow ">Da revisionare</button>
                        </form>
                        
                        @endif
                        @endauth
                        
                    </div>
                </div>
                
            </div>
        
    </div>
    
    
</x-layout>
