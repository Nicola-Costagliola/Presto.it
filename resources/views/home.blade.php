<x-layout>
    <div class="container mb-5 ">
        <h1>Ciao</h1>

        @auth
        <a href=" {{ route('annuncements.create') }}" class=" btn btn-success ">Inserisci annuncio</a>    
        @endauth
        
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 ">
          @foreach($annuncements as $annucement)

          <x-card 
          
          :title="$annucement->title"
          :category="$annucement->category->name"
          :body="$annucement->body"
          :price="$annucement->price"

          />
          @endforeach

        </div>

        
    </div>
</x-layout>