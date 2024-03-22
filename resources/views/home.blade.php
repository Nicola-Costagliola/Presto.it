<x-layout>

  <div class="container-fluid py-5 mb-5 hero-header background">
    <div class="container py-5">
      <div class="row g-5 align-items-center ">
        <div class="col-12 col-lg-7">
          <h1 class="mb-5 display-3 text-primary">Pesto.it</h1>
          <h4 class="mb-3 text-secondary">Con Presto.it trovi subito quello che cerchi</h4>

          <div class="position-relative mx-auto">
            <form class="d-flex " role="search" action="{{ route('announcements.search')}}" method="GET">
              <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" name="searched" type="search" placeholder="Cerca"
              aria-label="Search">
              <button class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-black h-100" style="top: 0; right: 25%;" type="submit">Cerca</button>
            </form>
          </div>
        </div>


          <div class="col-12 col-lg-5">
            <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">

              @foreach ($categories as $category)


              <div class="carousel-inner" role="listbox">
                <div class="carousel-item @if($loop->first)active @endif rounded">
                  <img src="https://picsum.photos/400/300" alt="" class="img-fluid w-100 h-100 bg-secondary rounded">
                  <a href="{{ route('category.show', $category ) }}" class="btn px-4 py-2 text-white rounded">{{$category->name}}</a>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-black " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-black " aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              @endforeach

            </div>
          </div>

      </div>
    </div>
  </div>


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
