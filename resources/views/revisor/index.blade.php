<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-4 ">
                <h1 class=" display-2 text-center">
                    {{ $announcement ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement)
    <div class="container">
        <div class="row">
            <div class="col-12">
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
                <h5 class=" card-title ">Titolo: {{ $announcement->title }}</h5>
                <p class=" card-title ">Descrizione: {{ $announcement->body }}</p>
                <p class=" card-title ">Pubblicato il: {{ $announcement->created_at }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 ">

            <form action="{{ route('revisor.acceptAnnouncement', $announcement) }}" method="POST">
            @csrf
            @method('PATCH')
                <button type="submit" class="btn btn-success shadow ">Accetta</button>
            </form>

            </div>
            <div class="col-12 col-md-6 text-end">

            <form action="{{ route('revisor.rejectAnnouncement',$announcement) }}" method="POST">
            @csrf
            @method('PATCH')
                <button type="submit" class="btn btn-success shadow ">Rifiuta</button>
            </form>

            </div>

        </div>
    </div>

    @endif
</x-layout>