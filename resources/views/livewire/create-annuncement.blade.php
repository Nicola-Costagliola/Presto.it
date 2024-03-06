<div>
    <form wire:submit.prevent="store">
        <div class="col-6 mx-auto ">



            <h1 class=" mb-3 mt-5 ">Crea il tuo annuncio</h1>
            <x-success />

            <div class="row g-3 ">
                <div class="col-12">
                    <label for="title">Inserisci il titolo del tuo annuncio</label>
                    <input class=" form-control " type="text" id="title" wire:model.live="title">
                    @error('title')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>

                <div class="col-12">
                    <label for="categories">Seleziona Categoria</label>
                    <select class="form-select" id="categories" wire:model="category">

                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="col-12">
                    <label for="body">Inserisci la descrizione</label>
                    <textarea class=" form-control " type="text" id="body" wire:model.live="body"></textarea>
                    @error('body')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>

                <div class="col-12">
                    <label for="price">Inserisci il prezzo</label>
                    <input class=" form-control " type="text" id="price" wire:model.live="price">
                    @error('price')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>

                <button type="submit" class=" btn btn-primary shadow px-4 py-2 mt-4 ">Crea</button>
            </div>
        </div>
    </form>
</div>
