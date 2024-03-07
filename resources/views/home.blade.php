<x-layout>
  <div class="container mb-5 text-center mt-3 p-5">
    <div class="row ">
      <div class="col-12 shadow p-5">
        <h1>Annunci</h1>
        @auth
        <a href=" {{ route('announcements.create') }}" class=" btn btn-success ">Inserisci annuncio</a>
      </div>
        @endauth
    </div>

    <div class="row mt-5 shadow p-3">
      @foreach($announcements as $announcement)
      <div class="col-4">
        <x-card :title="$announcement->title"
          :category="$announcement->category->name"
          :body="$announcement->body"
          :price="$announcement->price"
          :created="$announcement->created_at"
          :route="route('announcements.show', $announcement)"
          />
        </div>
        @endforeach
      </div>
    </div>


</x-layout>