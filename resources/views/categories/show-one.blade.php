<x-layout>

    <div class="container mt-3 text-center">
        <div class="col-12 mt-5">
            <div class="row">

                <x-back />
                <div class="col-12 shadow p-5 text-center">

                    <p class=" display-6 montserrat text_color">Ecco tutti gli annunci della categoria: </p>
                    <h3 class=" display-5 fw-semibold montserrat text_color">{{$category->name_it}}</h3>

                </div>


                @forelse ($announcements as $announcement)

                <div class="col-12 col-xl-3 col-lg-4 col-md-6 shadow p-3 g-3">
                    <x-card
                    :title="$announcement->title"
                    :img="!$announcement->images()->get()->isEmpty()
                        ? $announcement->images()->first()->getUrl(400,250)
                        : 'https://picsum.photos/400/250'"
                    :body="$announcement->body"
                    :price="$announcement->price"
                    :category="$category->name_it"
                    :created="$announcement->created_at"
                    :route="route('announcements.show', $announcement)" />
                </div>
            @empty
            <div class="row ">

                <div class="col-12 text-center shadow p-5 mt-5">
                    <p class="h1 montserrat text_color">Non sono presenti annunci per questa categoria</p>
                    @auth
                    <p class="h2 montserrat text_color">Pubblicane uno:</p>
                    <p class=" montserrat d-inline-flex">
                        <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                        aria-controls="collapseExample"
                        class="bn632-hover bn26 shadow align-content-center " style="width: 100%">
                        Crea nuovo annuncio per questa categoria
                        </a>
                    </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">

                        <livewire:create-announcement :category="$category" />

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