<x-layout>


    <!-- <div class="container mt-4">
    <div class="row">
                <div class="col-md-6 mx-auto ">

                    <h1 class="text_color montserrat ">Scrivi la tua richiesta</h1>

                    @if(session()->has('message'))
                        <div class="alert alert-success montserrat">
                        {{ session('message') }}
                        </div>
                    @endif


                    <div class="mt-4">
                        <form action="{{ route('become.revisor.send') }}" method="POST">
                            @csrf
                            <div class="row g-3">

                                <div class="col-12">
                                    <label for="msg" class="montserrat text_color_body">Motivo della richiesta</label>
                                    <textarea name="msg" id="msg" rows="3" class="form-control"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="bn632-hover bn26 ">Invia</button>
                                </div>


                            </div>
                        </form>
                    </div>


                </div>
            </div>
    </div> -->


    <x-back />

<div class="container-contact100">


    <div class="wrap-contact100">

        
        @if(session()->has('message'))
            <div class="alert alert-success montserrat">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('become.revisor.send') }}" method="POST" class="contact100-form validate-form">
        @csrf

            <span class="contact100-form-title">Scrivi la tua richiesta
                <i class="bi bi-envelope-arrow-down"></i>
            </span>

            <div class="wrap-input100 validate-input">
                
                <label class="" for="msg"> Motivo della richiesta
                    <i class="bi bi-chat-left-text"></i>
                </label>
                <textarea name="msg" id="msg" rows="3" class="input100" placeholder="Scrivi qui il tuo messaggio"></textarea>
            </div>

            <button type="submit" class=" contact100-form-btn ">Invia
            </button>
            
        </form>

    </div>

</div>


</x-layout>