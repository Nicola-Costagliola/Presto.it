
{{-- <a href="{{ $route }}">
    <div class=" card reveal reveal.active shadow border border-primary mb-3 h-100 ">
        <img src="{{ $img }}" class="card-img-top rounded " alt="...">
        <div class="card-body h-75 ">
            <h4 class=" fs-3  text_color_body montserrat">{{ ucfirst($title) }}</h4>
            <p class="card-text text_color_body montserrat fs-6">Categoria: {{ ucfirst($category) }}</p>
            <p class="card-text text_color_body fs-4"><strong>Prezzo: {{$price}} €</strong></p>
        </div>
        
    </div>
</a> --}}

<a href="{{ $route }}">
    <div class="row reveal reveal.active quotes ">
        <div class="col-12">
            <div class="card-sl">
                <div class="card-img">
                    <img src="{{ $img }}" alt="immagine annuncio">
                </div>
                <a class="card-action"><i class="bi bi-heart-fill"></i></a>
                <div class="card-heading">
                    {{ ucfirst($title) }}
                </div>
                <div class="card-text">
                    {{ ucfirst($category) }}
                </div>
                <div class="card-text">
                    <strong>{{ $price }} €</strong>
                </div>
                <a href="{{ $route }}" class="card-button bn633-hover bn27">Apri</a>
            </div>
        </div>
    </div>
</a>

