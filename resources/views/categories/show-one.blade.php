<x-layout >

    <div class="container mt-5 text-center">
        <div class="col-12 mt-5">
            <div class="row">

            <x-back />
                <div class="col-12 shadow p-5 text-center">
                    <h1 class="display-5">Espora la categoria {{$category->name}}</h1>
                </div>

                @forelse ($category->announcements as $announcement)

                <div class="col-3 shadow p-3">
                    <x-card :title="$announcement->title"
                    :body="$announcement->body"
                    :price="$announcement->price"
                    :category="$category->name"
                    :created="$announcement->created_at"
                    route="{{ route('announcements.show', $announcement) }}"
                     />
                </div>
                @empty
                    <div class="row ">

                        <div class="col-12 text-center shadow p-5 mt-5">
                            <p class="h1">Non sono presenti annunci per questa categoria</p>
                            <p class="h2">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn btn-success">Crea nuovo annuncio</a></p>
                        </div>
                    </div>

                @endforelse
            </div>
        </div>
    </div>

</x-layout>