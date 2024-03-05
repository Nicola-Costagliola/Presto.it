<x-layout>
    <div class="container">
        <h1>Ciao</h1>

        @auth
        <a href=" {{ route('annuncements.create') }}" class=" btn btn-success ">Inserisci annuncio</a>    
        @endauth
        
    </div>
</x-layout>