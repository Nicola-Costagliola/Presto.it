<footer class="footer shadow text-light text-center py-3  container-fluid mt-5">
    <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave " id="wave3"></div>
            <div class="wave" id="wave4"></div>
    </div>
            <div class="container mt-5">
                <div class="row">

                        <div class="col-6">
                            <h5 class="text_color_body ">{{ __('messages.contattaci') }}</h5>
                            <p class="text_color_body bi bi-envelope-fill "> Email: info@example.com</p>
                            <p class="text_color_body bi bi-telephone-fill ">{{ __('messages.telefono') }}: +123 456 789</p>
                        </div>

                            @auth
                                @if(!Auth::user()->is_revisor)

                                    <div class="col-md-6">
                                        <h5 class="text_color_body">{{ __('messages.lavoraConNoi') }}</h5>
                                        <p class=" text_color_body">{{ __('messages.registratiEClick') }}</p>
                                        <a href="{{ route('become.revisor') }}" class="btn btn-primary text-light shadow my-3 ">{{ __('messages.diventaRevisore') }}</a>
                                    </div>

                                @endif
                            @endauth


                        <div class="col-md-6 ">
                            <h5 class="text_color_body ">{{ __('messages.seguici') }}</h5>
                            <ul>
                                <li class="list-inline-item link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover bi bi-facebook text_color_body "><a href="#" class="text_color_body"> Facebook</a></li>
                                <li class=" list-inline-item link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover bi bi-telegram text_color_body "><a href="#" class="text_color_body"> Twitter</a></li>
                                <li class="list-inline-item link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover bi bi-instagram text_color_body "><a href="#" class="text_color_body"> Instagram</a></li>
                            </ul>
                        </div>
                </div>
            </div>

        <div class="text-center mt-3">
            <p class="text_title  display-6"><img src="{{asset('Logo/Logo2-no-bg.png')}}" style="height: 100px" alt=""></p>
        </div>
</footer>
