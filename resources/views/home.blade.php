<x-layout>
  <div class="container mb-5 text-center mt-3 p-5">
    <div class="row ">
      <div class="col-12 shadow p-5">
        <h1 class="display-1 text_color">Annunci</h1>
        @auth
        <a href=" {{ route('announcements.create') }}" class=" btn btn-success ">Inserisci annuncio</a>
        @endauth
      </div>
    </div>

    <div class="row mt-5 shadow ">
      @foreach($announcements as $announcement)
      <div class="col-12 col-xl-3 col-lg-4 col-md-6 g-3  ">
        <x-card  :title="$announcement->title"
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
