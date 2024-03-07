
    <div class="card shadow">
        <img src="https://picsum.photos/100/70" class="card-img-top p-3 rounded" alt="...">
        <div class="card-body">
            <h4 class="card-title text-center">{{ $title }}</h4>
            <p class="card-text">Categoria: {{ $category }}</p>
            <p class="card-text">Descrizione: {{ $body }}</p>
            <p class="card-text"><strong>Prezzo: {{$price}} €</strong></p>
            <a href="{{ $route }}" class=" btn btn-sm btn-primary shadow">Visualizza annuncio</a>
            <p class="card-footer mt-3 mb-0">Pubblicato il: {{ $created->format('d/m/Y') }}</p>
        </div>
    </div>
