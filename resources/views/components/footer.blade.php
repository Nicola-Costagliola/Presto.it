<footer class="footer shadow text-light text-center py-3  container-fluid mt-3">
    <div class="container mt-5">
        <div class="row">

             <div class="col-6">
                <h5 class="text-white montserrat">{{ __('messages.contattaci') }}</h5>
                <p class="text-white bi bi-envelope-fill montserrat"> Email: info@example.com</p>
                <p class="text-white bi bi-telephone-fill montserrat">{{ __('messages.telefono') }}: +123 456 789</p>
             </div>

            @auth
                @if(!Auth::user()->is_revisor)

                    <div class="col-md-6">
                        <h5 class="montserrat text-white">{{ __('messages.lavoraConNoi') }}</h5>
                        <p class="montserrat text-white">{{ __('messages.registratiEClick') }}</p>
                        <a href="{{ route('become.revisor') }}" class="btn btn-primary text-light shadow my-3 montserrat">{{ __('messages.diventaRevisore') }}</a>
                    </div>

                @endif
            @endauth


            <div class="col-md-6">
                <h5 class="text-white montserrat">{{ __('messages.seguici') }}</h5>
                    <li class="list-inline-item link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover bi bi-facebook text-white montserrat"><a href="#"> Facebook</a></li>
                    <li class=" list-inline-item link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover bi bi-telegram text-white montserrat"><a href="#"> Twitter</a></li>
                    <li class="list-inline-item link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover bi bi-instagram text-white montserrat"><a href="#"> Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center mt-3">
        <p class="text_title montserrat display-6">Presto.it</p>
    </div>
</footer>