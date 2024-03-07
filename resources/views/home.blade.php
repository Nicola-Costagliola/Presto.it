<x-layout>
    <div class="container mb-5 ">
        <h1>Ciao</h1>

        @auth
        <a href=" {{ route('announcements.create') }}" class=" btn btn-success ">Inserisci annuncio</a>
        @endauth

        <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 ">
          @foreach($announcements as $announcement)

          <x-card

          :title="$announcement->title"
          :category="$announcement->category->name"
          :body="$announcement->body"
          :price="$announcement->price"
          :created="$announcement->created_at"
          route="#"
          />
          @endforeach

        </div>


    </div>
</x-layout>