{{-- <x-layout >

    <div class="container mt-5 text-center">
        <div class="col-12 mt-5">
            <div class="row">

            <x-back />
                <div class="col-12 shadow p-5 text-center">

                    <p class=" display-6 montserrat text_color_body">Ecco tutti gli annunci della categoria: </p>
                    <h3 class=" display-5 fw-semibold montserrat text_color">{{$category->name}}</h3>

                </div>

                @forelse ($category->announcements as $announcement)

                <div class="col-12 col-xl-3 col-lg-4 col-md-6 shadow p-3 g-3">
                    <x-card :title="$announcement->title"
                    :body="$announcement->body"
                    :price="$announcement->price /100"
                    :category="$category->name"
                    :created="$announcement->created_at"
                    :route="route('category.single.announcement', $announcement )"
                     />
                </div>
                @empty
                    <div class="row ">

                        <div class="col-12 text-center shadow p-5 mt-5">
                            <p class="h1 montserrat text_color_body">Non sono presenti annunci per questa categoria</p>
                            <p class="h2 montserrat text_color">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn montserrat text_color_body">Crea nuovo annuncio</a></p>
                        </div>
                    </div>

                @endforelse
            </div>
        </div>
    </div>

</x-layout> --}}



<x-layout>

    <div class="container mt-5 text-center">
        <div class="col-12 mt-5">
            <div class="row">

                <x-back />
                <div class="col-12 shadow p-5 text-center">

                    <p class=" display-6 montserrat text_color_body">Ecco tutti gli annunci della categoria: </p>
                    <h3 class=" display-5 fw-semibold montserrat text_color">{{$category->name}}</h3>

                </div>


                @forelse ($category->announcements as $announcement)
                    @if ($announcement->is_accepted)

                        <div class="col-12 col-xl-3 col-lg-4 col-md-6 shadow p-3 g-3">
                            <x-card :title="$announcement->title" :body="$announcement->body" :price="$announcement->price /100"
                                :category="$category->name" :created="$announcement->created_at"
                                :route="route('category.single.announcement', $announcement )" />
                        </div>
                        @else
                        <div class="row ">

                            <div class="col-12 text-center shadow p-5 mt-5">
                                <p class="h1 montserrat text_color_body">Non sono presenti annunci per questa categoria</p>
                                @auth


                                <p class="h2 montserrat text_color">Pubblicane uno:</p>
                                <p class="btn montserrat text_color_body d-inline-flex ">
                                    <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Crea nuovo annuncio per questa categoria
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">

                                        <livewire:create-announcement-from-category :category="$category" />

                                    </div>
                                </div>
                                @endauth
                            </div>
                        </div>
                    @endif
                    @empty
                    <div class="row ">

                        <div class="col-12 text-center shadow p-5 mt-5">
                            <p class="h1 montserrat text_color_body">Non sono presenti annunci per questa categoria</p>
                            @auth
                            <p class="h2 montserrat text_color">Pubblicane uno:</p>
                            <p class="btn montserrat text_color_body d-inline-flex ">
                                <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Crea nuovo annuncio per questa categoria
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">

                                    <livewire:create-announcement-from-category :category="$category" />

                                </div>
                            </div>
                            @endauth
                        </div>
                    </div>


                    @endforelse


            </div>
        </div>
    </div>

</x-layout>