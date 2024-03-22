<x-layout>
  <div class="container mb-5 text-center mt-3 p-5">


    <div class="row ">

      <div class="col-12 mb-5 p-2 ">

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

        <div class="z-4 position-absolute p-5 m-5 ">
          <h1 class="tracking-in-expand display-1  ">Presto.it</h1>
        </div>
        <img  class="img-fluid opacity-50 card-img " src="https://picsum.photos/2000/1000" alt="" >

      </div>
      <div class="col-12 shadow p-5 reveal reveal.active">





        <h1 class="display-3 text_color montserrat">{{__('messages.welcome')}}</h1>

        @auth
        <a href=" {{ route('announcements.create') }}" class=" btn text_color_body montserrat ">Inserisci annuncio</a>
        @endauth
      </div>
    </div>

    <div class="row mt-5 shadow p-5 g-3">
      @foreach($announcements as $announcement)
      <div class="col-12 col-xl-4 col-lg-4 col-md-6 align-content-center ">
          <x-card 
          :title="$announcement->title"
          :img="!$announcement->images()->get()->isEmpty() 
          ? $announcement->images()->first()->getUrl(400,300)
          : 'https://picsum.photos/200'"
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
