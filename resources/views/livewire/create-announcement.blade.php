<div>

    <form wire:submit.prevent="store" >

        <div class="col-6 mx-auto ">


            <h1 class=" mb-3 mt-5 display-5 montserrat text_color">Crea il tuo annuncio</h1>

            <x-back />

            <x-success />

            <div class="row g-3 ">
                <div class="col-12">
                    <label for="title" class="montserrat text_color_body">Inserisci il titolo del tuo annuncio</label>
                    <input class=" form-control @error('title') is-invalid @enderror montserrat text_color_body" type="text" id="title" wire:model.blur="title">
                    @error('title')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>

                <div class="col-12">
                    <label for="categories" class="montserrat text_color_body text_color_body">Seleziona Categoria</label>
                    <select class="form-select montserrat " id="categories" wire:model="category">

                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name_it }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-12">
                    <label for="body" class="montserrat text_color_body">Inserisci la descrizione</label>
                    <textarea class=" form-control @error('body') is-invalid @enderror text_color_body montserrat" type="text" id="body" wire:model.blur="body"></textarea>
                    @error('body')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>

                <div class="col-12">
                    <label for="price" class="montserrat text_color_body">Inserisci il prezzo (con 2 cifre decimali)</label>
                    <input class=" form-control @error('price') is-invalid @enderror montserrat" type="text"  placeholder="Es. 10.00"
                    id="price" wire:model="price">
                    @error('price')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>


                <div class="col-12">

                    <input wire:model="temporary_images" type="file" name="images" multiple
                    class="form-control shadow  @error('temporary_images.*') is-invalid @enderror " placeholder="img">
                    @error('temporary_images.*')<span class=" text-danger "> {{ $message }} </span> @enderror

                </div>

                @if(!empty($images))

                <div class="row">
                    <div class="col-12">
                        <p>Foto Preview:</p>
                        <div class="row border border-4 border-info rounded shadow py-4">

                            @foreach($images as $key => $image)

                                <div class="col my-3 ">
                                        <div class="img-preview shadow rounded mx-auto" style="background-image: url({{ $image->temporaryUrl() }}); background-size: cover;">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-danger shadow mt-2 "
                                            wire:click="removeImage({{$key}})">Cancella</button>
                                        </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>

                @endif

                <button type="submit" class=" btn btn-primary shadow px-4 py-2 mt-4 montserrat text_color_body ">Crea</button>
            </div>
        </div>
    </form>
</div>
