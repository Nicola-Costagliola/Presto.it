<x-layout>
  <div class="container mb-5 text-center mt-3 p-5">
    <div class="row ">
      <div class="col-12 shadow p-5">

        @if(session()->has('access.denied'))
        <div class="alert alert-danger montserrat">
          {{ session('access.denied') }}
        </div>
        @endif

        @if(session()->has('message'))
        <div class="alert alert-success montserrat">
          {{ session('message') }}
        </div>
        @endif

        <h1 class="display-1 text_color montserrat">Annunci</h1>
        @auth
        <a href=" {{ route('announcements.create') }}" class=" btn text_color_body montserrat ">Inserisci annuncio</a>
        @endauth
      </div>
    </div>

    <div class="row mt-5 shadow  p-2">
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
