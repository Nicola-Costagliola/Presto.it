<x-layout>
  <div class="container-fluid py-5  background  kenburns-top shadow ">

    <div class="container py-5  tracking-in-expand ">
      <div class="row  g-5 align-items-center justify-content-center text-center ">
        <div class="col-12 col-lg-7 ">
          <h1 class="mb-5 testo-primario text_color display-2 fw-bold ">Presto.it</h1>
          <p class="mb-3 text-secondary display-6 text-wrap fs-3">{{ __('messages.slogan')}}</p>

          <div class="position-relative">
            <form style="margin-left:150px" role="search" action="{{ route('announcements.search')}}" method="GET">
              <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" name="searched" type="search" placeholder="{{ __('messages.cerca') }}"
              aria-label="Search">
              <button class="bn632-hover bn26 py-3 px-4 ms-5 position-absolute start-50 opacity-75 h-100" style="top: 0; right: 25%;" type="submit">{{ __('messages.cerca') }}</button>
            </form>
          </div>
        </div>


          <div class="col-12 d-md-none">
            <div id="carouselId" class="carousel " data-bs-ride="carousel">

              @foreach ($categories as $category)


              <div class="carousel-inner shadow" role="listbox">
                <div class="carousel-item carItem  @if($loop->first)active @endif rounded">
                  <a href="{{ route('category.show', $category ) }}" class="text_color_body  display-6    text_color mt-2">
                    @switch(App::currentLocale())
                            @case('it')
                            {{ $category->name_it }}
                            @break
                            @case('es')
                            {{ $category->name_es }}
                            @break
                            @case('en')
                            {{ $category->name_en }}
                            @break
                            @default
                            {{ $category->name_it }}
                            @endswitch
                        <img src="{{asset("images/$category->name_it.png")}}" alt="" class="img-fluid w-100 h-100  rounded explainer">
                  </a>
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

      <div class="row aligh-item-center mt-5 d-none d-md-block">

        <div class="col-12 mt-5">

          {{-- inizio categorie --}}
          <div class="all ">
            <a href="{{ route('category.show', 3 ) }}" class="left4">
              <div class="">
                <div class="text">Arredamendo</div>
              </div>
            </a>
            <a href="{{ route('category.show', 7 ) }}" class="left3">
            <div class="">
              <div class="text">Accessori</div>
            </div>
            </a>
            <a href="{{ route('category.show', 6 ) }}" class="left2">
            <div class="">
              <div class="text">Musica</div>
            </div>
            </a>
            <a href="{{ route('category.show', 5 ) }}" class="left1">
            <div class="">
              <div class="text">Immobili</div>
            </div>
            </a>
            <a href="{{ route('category.show', 10 ) }}" class="left">
            <div class="">
              <div class="text">Make-Up</div>
            </div>
            </a>

            <div class="tracking-in-expand center">
              <div class="explainer px-2  "><span>Categorie</span></div>
              <div class="text">Categorie</div>
            </div>

            <a href="{{ route('category.show', 9 ) }}" class="right">
              <div class="">
                <div class="text">Sport</div>
              </div>
            </a>
            <a href="{{ route('category.show', 4 ) }}" class="right1">
              <div class="">
                <div class="text">Lavoro</div>
              </div>
            </a>
            <a href="{{ route('category.show', 8 ) }}" class="right2">
              <div class="">
                <div class="text">Collezione</div>
              </div>
            </a>
            <a href="{{ route('category.show', 1 ) }}" class="right3">
              <div class="">
                <div class="text">Tecnologia</div>
              </div>
            </a>
            <a href="{{ route('category.show', 2 ) }}" class="right4">
              <div class="">
                <div class="text">Auto</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      


    </div>
  </div>



  <div class="container p-5">

    <div class="row text-center ">

      <div class="col-12 mb-4 p-2 ">

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

        <h1 class="display-3 text_color montserrat">{{__('messages.annunci')}}</h1>

        @auth
        <a href=" {{ route('announcements.create') }}" class=" bn632-hover bn26 shadow p-3 mt-1 text_color_body montserrat ">{{ __('messages.inserisciAnnuncio')}}</a>
        @endauth
      </div>
    </div>

    <div class="row mt-5 shadow p-5 g-3">
      @foreach($announcements as $announcement)
      <div class="col-12 col-xl-4 col-lg-4 col-md-6 align-content-center ">
          <x-card
          :title="$announcement->title"
          :img="!$announcement->images()->get()->isEmpty()
          ? $announcement->images()->first()->getUrl(400,250)
          : 'https://picsum.photos/400/250'"
          :category="$announcement->category->name_it"
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
