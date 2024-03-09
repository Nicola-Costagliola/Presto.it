<!-- 
    <div class="card shadow">
        <img src="https://picsum.photos/100/70" class="card-img-top p-3 rounded" alt="...">
        <div class="card-body">
            <h4 class="card-title text-center display-5 text-white">{{ $title }}</h4>
            <p class="card-text text-white">Categoria: {{ $category }}</p>
            <p class="card-text text-white">Descrizione: {{ $body }}</p>
            <p class="card-text text-white"><strong>Prezzo: {{$price}} €</strong></p>
            <a href="{{ $route }}" class=" btn btn-sm btn-primary shadow text-white">Visualizza annuncio</a>
            <p class="card-footer mt-3 mb-0 text-white">Pubblicato il: {{ $created->format('d/m/Y') }}</p>
        </div>
    </div> -->

    <div class="mb-3 ">
    <div class="card shadow border border-primary" style="width: 18rem;">
  <img src="https://picsum.photos/100/70" class="card-img-top rounded " alt="...">
  <div class="card-body">
  <h4 class="card-title text-center display-5 text_color_body">{{ $title }}</h4>
            <p class="card-text text_color_body">Categoria: {{ $category }}</p>
            <p class="card-text text_color_body">Descrizione: {{ $body }}</p>
            <p class="card-text text_color_body"><strong>Prezzo: {{$price}} €</strong></p>
            <a href="{{ $route }}" class=" btn btn-sm btn-primary shadow text_color_body">Visualizza annuncio</a>
            <p class="card-footer mt-3 mb-0 text_color_body">Pubblicato il: {{ $created->format('d/m/Y') }}</p>
  </div>
</div>
</div>