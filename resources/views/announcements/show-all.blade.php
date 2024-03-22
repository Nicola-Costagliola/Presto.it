<x-layout>
    <div class="container mt-5 text-center">
        <div class="col-12 mt-5 ">
            <div class="row">

                <div class="col-12 shadow p-5 text-center">
                    <p class=" display-6 montserrat text_color">{{ __('messages.tuttiAnnunci') }}</p>
                </div>

                <div class="row mt-5 shadow p-5 g-3">
                @forelse ($announcements as $announcement)

                <div class="col-12 col-xl-4 col-lg-4 col-md-6 align-content-center ">
                <x-card  
                :title="$announcement->title"
                :img="!$announcement->images()->get()->isEmpty() 
                ? $announcement->images()->first()->getUrl(400,300) 
                : 'https://picsum.photos/200' "
                :category="$announcement->category->name"
                :body="$announcement->body"
                :price="$announcement->price"
                :created="$announcement->created_at"
                :route="route('announcements.show', $announcement)"
                />
                </div>

                @empty
                    <div class="row ">

                        <div class="col-12 text-center shadow p-5 mt-5">
                            <p class="h1 montserrat text_color_body">{{ __('messages.noAnnunciRicerca') }}</p>
                        </div>
                    </div>

                    @endforelse
                </div>

                <div class=" d-flex  justify-content-center ">
                    <div class=" mt-5 montserrat text_color_body">
                        {{ $announcements->links() }}

                    </div>
                </div>


            </div>
        </div>
    </div>
</x-layout>