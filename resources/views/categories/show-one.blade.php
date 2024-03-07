<x-layout >
    <div class="col-12">
        <div class="row">
            @forelse ($category->announcements as $announcement)
                <div class="col-4">
                    <x-card
                    :title="$announcement->title"
                    :body="$announcement->body"
                    :price="$announcement->price"
                    :created="$announcement->created_at"
                    route="#"
                    />
                </div>
            @empty
                <div class="col-6 mx-auto mt-5">
                    <p class="h1">Non sono presenti annunci per questa categoria</p>
                    <p class="h2">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn btn-success">Crea nuovo nuovo annuncio</a></p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>