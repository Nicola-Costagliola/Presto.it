<x-layout>
    <!-- <div class="container ">

        <div class="row mt-5  ">

            <h1 class=" mt-3  text-center display-5 text_color mt-5">{{ __('messages.accedi') }}</h1>

            <div class=" col-12 col-lg-6 mx-auto ">
                <div class=" form card mt-3  shadow">

                    <div class=" card-header text_color_body bi bi-person-circle ">{{ __('messages.accedi') }}
                    </div>
                    <div class=" card-body ">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="row g-3 ">
                                <div class="col-12">
                                    <label class="text_color_body bi bi-envelope" for="email"> Email</label>
                                    <p class="fw-lighter m-0 p-0 ">{{ __('messages.emailObb') }}</p>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value=" {{ old('email') }} ">
                                    @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12 ">
                                    <label for="password" class="text_color_body bi bi-lock-fill"> Password</label>
                                    <p class="fw-lighter m-0 p-0 ">{{ __('messages.passwordObb') }}</p>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="remember" class="text_color_body bi bi-lock-fill">{{ __('messages.remember') }}</label>
                                    <input type="checkbox" id="remember" name="remember" class="" value="true">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class=" btn btn-primary text_color_body ">{{ __('messages.entra') }}
                                    </button>

                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

            <x-back />

        </div>
    </div> -->

    <x-back />

    <div class="container-contact100">

        <div class="wrap-contact100">

            <form action="/login" method="POST" class="contact100-form validate-form">
            @csrf

                <span class="contact100-form-title">{{ __('messages.accedi') }}
                    <i class="bi bi-person-circle"></i>
                </span>

                <div class="wrap-input100 validate-input">
                    
                    <label class="" for="email"> Email
                        <i class="bi bi-envelope"></i>
                    </label>
                    <span class="label-input100">{{ __('messages.emailObb') }}</span>
                    <input type="email" id="email" name="email" class="input100 @error('email') is-invalid @enderror" value=" {{ old('email') }} " placeholder="{{ __('messages.inserisciEmail') }}">
                    @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                <label class="" for="password"> Password
                        <i class=" bi bi-lock-fill"></i>
                    </label>
                    <span class="label-input100">La password è obbligatoria: almeno 1 lettera grande, 1 simbolo e 1 numero </span>
                    <input type="password" id="password" name="password" class="input100 @error('password') is-invalid @enderror" placeholder="Scrivi la tua password">
                    @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="validate-input mb-3">
                    <span class="label-input100">{{ __('messages.remember') }}</span>
                    <input type="checkbox" id="remember" name="remember" class="" value="true">
                </div>

                <button type="submit" class=" contact100-form-btn ">{{ __('messages.entra') }}
                </button>
                
            </form>

        </div>

    </div>


</x-layout>