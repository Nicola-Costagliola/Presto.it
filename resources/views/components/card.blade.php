
{{-- <div class="card shadow">
    <img src="https://picsum.photos/100/70" class="card-img-top p-3 rounded" alt="...">
    <div class="card-body">
        <h4 class="card-title text-center display-5 text-white">{{ $title }}</h4>
        <p class="card-text text-white">Categoria: {{ $category }}</p>
        <p class="card-text text-white">Descrizione: {{ $body }}</p>
        <p class="card-text text-white"><strong>Prezzo: {{$price}} €</strong></p>
        <a href="{{ $route }}" class=" btn btn-sm btn-primary shadow text-white">Visualizza annuncio</a>
        <p class="card-footer mt-3 mb-0 text-white">Pubblicato il: {{ $created->format('d/m/Y') }}</p>
    </div>
</div> --}}

<a href="{{ $route }}">
    <div class=" card shadow border border-primary mb-3 h-100 ">
        <img src="https://picsum.photos/100/70" class="card-img-top rounded " alt="...">
        <div class="card-body h-100  ">
            <h4 class="card-title text-center display-5 text_color_body montserrat">{{ $title }}</h4>
            <p class="card-text text_color_body montserrat fs-4">Categoria: {{ $category }}</p>
            {{-- <p class="card-text text_color_body montserrat">Descrizione: {{ $body }}</p> --}}
            <p class="card-text text_color_body fs-4"><strong>Prezzo: {{$price}} €</strong></p>
            {{-- <a href="{{ $route }}" class=" btn btn-sm btn-primary shadow text_color_body montserrat">Visualizza annuncio</a> --}}
            {{-- <p class="card-footer mt-3 mb-0 text_color_body  montserrat"  >Pubblicato il: {{ $created->format('d/m/Y') }}</p> --}}
        </div>

            <div class="card-footer mt-5  mb-0 text_color_body ">
                <small class="text-body-secondary mt-3 mb-0 text_color_body  montserrat ">Pubblicato il: {{
                    $created->format('d/m/Y') }}</small>
            </div>

    </div>



</a>
