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

            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="https://picsum.photos/1200/300" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1200/301" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1200/302" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1200/299" class="d-block w-100" alt="...">
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
            {{-- fine carosello --}}
            <div class="row">
                <div class="col-12 mt-3">
                    <h3 class="display-5 text_color_body montserrat">{{ $announcement->title }}</h3>

                    <p class="card-text text_color_body montserrat">Categoria: {{ $announcement->category->name }}</p>
                    <p class="card-text text_color_body montserrat">Descrizione: {{ $announcement->body }}</p>
                    <p class="card-text text_color_body montserrat"><strong>Prezzo: {{$announcement->price}} €</strong></p>
                    
                    <x-back />

                    <p><a class="btn shadow btn-secondary text_color_body montserrat " href=" {{route('category.show', ['category' => $announcement->category]) }} ">Esplora la categoria {{$announcement->category->name}} </a></p>

                </div>
            </div>

        </div>
    </div>
</div>


</x-layout>
