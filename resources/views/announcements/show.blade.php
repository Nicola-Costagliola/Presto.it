<x-layout>
    <div class="container text-center mt-3 p-2">
        <div class="row">
            <div class="col-12 shadow p-3">
                <h1 class="display-6 fs-2 text_color_body montserrat"><span class="text_color">Annuncio: </span>{{ $announcement->title }}</h1>
            </div>
        </div>
    </div>
    <div class="container p-0 mt-3">
        <x-back />
    </div>
    
    <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 shadow p-3">
                
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
                
                <div class="col-12 col-md-4 shadow p-2">
                    <div class="col-12 mt-3 ms-2">
                        <p class="text_color_body montserrat fs-3 "><span class="text_color fw-semibold ">Categoria: </span>{{ $announcement->category->name_it }}</p>
                        <p class="text_color_body montserrat fs-5"><span class="text_color fw-semibold ">descrizione: </span>{{ $announcement->body }}</p>
                        <p class="text_color_body montserrat fs-4 "><strong><span class="text_color">Prezzo: </span>{{$announcement->price}} €</strong></p>                        
                        <p><a class=" btn btn-outline rounded-5  montserrat "
                            href=" {{route('category.show', ['category' => $announcement->category]) }} ">
                            Esplora la categoria: {{$announcement->category->name_it}}
                        </a></p>
                        @auth
                        @if(Auth::user()->is_revisor)
                        <form action="{{ route('revisor.reviewedAnnouncement', $announcement) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-outline rounded-5  ">Da revisionare</button>
                        </form>
                        
                        @endif
                        @endauth
                        
                    </div>
                </div>
                
            </div>
        
    </div>
    
    
</x-layout>
