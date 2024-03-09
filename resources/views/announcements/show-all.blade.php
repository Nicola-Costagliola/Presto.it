<x-layout>
    <div class="container mt-5 text-center">
        <div class="col-12 mt-5">
            <div class="row">
                
                <div class="col-12 shadow p-5 text-center">
                    <p class=" display-6">Tutti gli annunci </p>
                </div>
                
                @foreach ($announcements as $announcement)
                
                <div class="col-3 shadow p-3">
                    <x-card 
                    :title="$announcement->title"
                    :body="$announcement->body"
                    :price="$announcement->price /100"
                    :category="$announcement->category->name"
                    :created="$announcement->created_at"
                    route="{{ route('announcements.show', $announcement) }}"
                    />
                </div>
                @endforeach
                
                <div class=" d-flex  justify-content-center ">
                    <div class=" mt-5">
                        {{ $announcements->links() }}

                    </div>
                </div>

                
            </div>
        </div>
    </div>
</x-layout>