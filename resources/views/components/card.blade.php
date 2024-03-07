<div class="col">
    <div class="card">
        <img src="https://picsum.photos/100/50" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p>Categoria: <a href="" class="btn btn-secondary">{{ $category }}</a></p>
            <p class="card-text">{{ $body }}</p>
            <strong>{{$price}}</strong>
            <a href="{{ $route }}" class=" btn btn-sm btn-primary ">Guarda annuncio</a>
            <p class="card-text text-end">Pubblicato il: {{ $created->format('d/m/Y') }}</p>
        </div>
    </div>
</div>