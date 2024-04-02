<x-layout>



    <x-back />

<div class="container-contact100">

    <div class="p-2 shadow border rounded-4">
        <div class="wrap-contact100">


            @if(session()->has('message'))
                <div class="alert alert-success montserrat">
                    {{ session('message') }}
                </div>
            @endif

            <form action="{{ route('become.revisor.send') }}" method="POST" class="contact100-form validate-form">
            @csrf

                <span class="contact100-form-title text-white ">Scrivi la tua richiesta
                    <i class="bi bi-envelope-arrow-down"></i>
                </span>

                <div class="wrap-input100 validate-input">

                    <label class="text_color fw-semibold fs-4" for="msg"> Motivo della richiesta
                        <i class="bi bi-chat-left-text"></i>
                    </label>
                    <textarea name="msg" id="msg" rows="3" class="input100" placeholder="Scrivi qui il tuo messaggio"></textarea>
                </div>

                <button type="submit" class=" contact100-form-btn rounded-3">Invia
                </button>

            </form>

        </div>
    </div>


</div>


</x-layout>