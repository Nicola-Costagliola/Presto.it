<div class=" container mt-3 ">
    <h4 class=" text-center ">Gestisci annunci</h4>
    <div class=" mt-3 ">
        
        <x-message />
        
        <table class="table table-bordered mt-3">
            <tr>
                <th>#</th>
                <th>Titolo</th>
                <th>Categoria</th>
                <th>Stato</th>
                <th></th>
            </tr>
            @foreach ($announcements as $announcement)
            @if($announcement->is_accepted == null && $announcement->is_accepted == false )
            <tr>
                <td>{{ $announcement->id}}</td>
                <td>{{$announcement->title}}</td>
                <td>{{$announcement->category->name}}</td>
                <td>
                    @if($announcement->is_accepted === null)
                    Da revisonare
                    @elseif ($announcement->is_accepted === 0)
                    Scartato
                    @endif
                </td>
                <td>
                    <a class="btn btn-sm btn-primary " href="{{ route('revisor.index', $announcement) }}">Apri</a>
                </td>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</div>
