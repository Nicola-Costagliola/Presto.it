<div>
    <form wire:submit.prevent="store" >
        <div class="col-12 mx-auto ">
            <p class=" mb-3 montserrat text_color">Scrivi il tuo messaggio a: {{ $announcement->user->name }}</p>
            <div>
                <x-message />
            </div>
            
            <div class="row g-3 ">
                <div class="col-12">
                    <label for="name" class="montserrat text_color">{{ ucfirst(Auth::user()->name) }}</label>
                </div>
                
                <div class="col-12">
                    <label for="email" class="montserrat text_color">{{ Auth::user()->email }}</label>
                </div>
                <div class="col-12">
                    <label for="message" class="montserrat text_color">Scrivi il messaggio</label>
                    <textarea class="form-control @error('message') is-invalid @enderror text_color_body montserrat" 
                    type="text" id="message" wire:model.blur="message"></textarea>
                    @error('message')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>
                    <button type="submit" onclick="window.location.href='#'" 
                    class=" bn632-hover bn26 shadow px-4 py-2 mt-4 montserrat text_color">Invia</button>
            </div>
        </div>
    </form>
</div>
