<div>
    <x-message />
    <form wire:submit.prevent="store" >
        <div class="col-12 mx-auto ">
            <div class="row g-3 ">
                <div class="col-12">
                    <label for="message" class="montserrat text_color fs-5 fw-semibold">Scrivi il tuo messaggio a: 
                        <span class=" text-info fs-5 ">{{ $announcement->user->name }}</span></label>
                    <textarea class="form-control @error('message') is-invalid @enderror text_color_body montserrat"
                    type="text" id="message" wire:model.blur="message"></textarea>
                    @error('message')<span class=" text-danger "> {{ $message }}</span> @enderror
                </div>
                    <button type="submit"
                    class=" bn632-hover bn26 shadow px-4 py-2 mt-4 montserrat text_color">Invia</button>
            </div>
        </div>
    </form>
</div>
