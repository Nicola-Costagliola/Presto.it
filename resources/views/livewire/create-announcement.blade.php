<div>
    <x-back />
    
    <form wire:submit.prevent="store" class="contact100-form validate-form">
        
        <div class="container-contact100">

            <div class="wrap-contact100">

            <div>
                {{-- <a name="success"></a> --}}
                <x-success />
            </div>
            
            <h1 class=" contact100-form-title text_color">Crea il tuo annuncio
                <i class="bi bi-chat-left-text-fill"></i>
            </h1>
            
            
                <div class="wrap-input100 validate-input">
                    <label for="title" class=" ">Titolo</label>
                    <span class="label-input100">{{ __('messages.titoloObb') }}</span>
                    <input class=" input100 @error('title') is-invalid @enderror montserrat text_color_body" type="text" id="title" wire:model.blur="title" placeholder="Inserisci il titolo del tuo annuncio">
                    @error('title')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>
                
                <div class="wrap-input100 validate-input">
                    <label for="categories" class=" ">Seleziona Categoria</label>
                    @if($category)
                        <p type="text" wire:model="categoryOgg" class=" form-control montserrat text_color_body" 
                        value="{{$category}}" id="category">{{ $category->name_it}}</p>
                    @else
                        <select class="form-select montserrat " id="categories" wire:model="categorySele">
                        
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name_it }}</option>
                        @endforeach
                        
                        </select>
                    @endif
                </div>
                <div class="wrap-input100 validate-input">
                    <label for="body" class=" ">Descrizione</label>
                    <span class="label-input100">{{ __('messages.descObb') }}</span>
                    <textarea class=" input100 @error('body') is-invalid @enderror text_color_body montserrat" type="text" id="body" wire:model.blur="body" placeholder="Inserisci la descrizione del tuo annuncio"></textarea>
                    @error('body')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>
                
                <div class="wrap-input100 validate-input">
                    <label for="price" class=" ">Prezzo</label>
                    <span class="label-input100">{{ __('messages.prezzoObb') }}</span>
                    <input class=" input100 @error('price') is-invalid @enderror montserrat" type="text"  placeholder="Inserisci il prezzo: Es. 10.00"
                    id="price" wire:model="price">
                    @error('price')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>
                
                
                <div class="wrap-input100 validate-input">
                    
                    <input wire:model="temporary_images" type="file" name="images" multiple
                    class="input100 shadow  @error('temporary_images.*') is-invalid @enderror " placeholder="img">
                    @error('temporary_images.*')<span class=" text-danger "> {{ $message }} </span> @enderror
                    
                </div>
                
                @if(!empty($images))
                
                <div class="row">
                    <div class="wrap-input100 validate-input">
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


                    <button type="submit" onclick="window.location.href='#'" class="contact100-form-btn shadow px-4 py-2 mt-4 text_color_body ">Crea</button>
                 
            </div>
        </div>
    </form>
</div>
