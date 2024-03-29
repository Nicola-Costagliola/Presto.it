<x-layout>
    <!-- <div class="container">
        <div class="row mt-5 ">
            <h1 class=" mt-3 text-center display-5 text_color ">{{ __('messages.registrati') }}</h1>
            <div class="col-12 col-lg-6  mx-auto ">
                <div class=" form card mt-3  shadow">
                    <div class=" card-header text_color_body bi bi-person-circle">
                        {{ __('messages.registrati') }}
                    </div>
                    <div class=" card-body ">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="row g-3 ">
                                <div class="col-12">
                                    <label for="name" class="text_color_body bi bi-person">{{ __('messages.inserisciNome') }}</label>
                                    <p class="fw-lighter m-0 p-0 ">{{ __('messages.nomeObb') }}</p>
                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value=" {{ old('name') }} ">
                                    @error('name') <span class=" text-danger small "> {{ __('messages.name') }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="email" class="text_color_body bi bi-envelope">{{ __('messages.inserisciEmail') }}</label>
                                    <p class="fw-lighter m-0 p-0 ">{{ __('messages.emailObb') }}</p>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value=" {{ old('email') }} ">
                                    @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password" class="text_color_body bi bi-lock-fill">{{ __('messages.inserisciPassword') }}</label>
                                    <p class="fw-lighter m-0 p-0 ">{{ __('messages.passwordObb') }}</p>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password_confirmation" class="text_color_body bi bi-lock-fill">{{ __('messages.confermaPassword') }}</label>
                                    <p class="fw-lighter m-0 p-0 ">{{ __('messages.confPasswordObb') }}</p>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class=" btn btn-primary text_color_body ">{{ __('messages.registrati') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <x-back />

    </div> -->

    <x-back />

    <div class="container-contact100">


        <div class="wrap-contact100">

       
        <div class="row">
            <div class="col-6">
                <a class="navbar-brand d-flex align-items-center " href="{{ route('home') }}">
                    <img src="{{asset('Logo/Logo2-no-bg.png')}}" class="img-fluid mb-4 " style="height: 150px" alt="resources/images/Logo">
                    <a class="testo-primario text_color display-6 "
                    href="{{ route('home') }}"></a>
                </a>
            </div>

            <div class="col-6 mt-4 ">
                <span class="mx-auto">Hai già un account?</span>
                <a href="/login" class=" btn shadow mx-5  ">Accedi</a>
            </div>
        </div>

            <form action="/register" method="POST" class="contact100-form validate-form">
            @csrf


                <span class="contact100-form-title">{{ __('messages.registrati') }}
                    <i class="bi bi-person-circle"></i>
                </span>

                <div class="wrap-input100 validate-input">
                    <label class="" for="name">{{ __('messages.nome') }}
                        <i class="bi bi-person"></i>
                    </label>
                    <span class="label-input100">{{ __('messages.nomeObb') }}</span>
                    <input type="text" id="name" name="name" class="input100 text-light @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="{{ __('messages.inserisciNome') }}">
                    @error('name') <span class=" text-danger small ">{{ __('messages.name') }} </span>  @enderror
                    <span class="focus-input100"></span>
                </div>

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
                    <span class="label-input100">{{ __('messages.passwordObb') }}</span>
                    <input type="password" id="password" name="password" class="input100 @error('password') is-invalid @enderror" placeholder="{{ __('messages.inserisciPassword') }}">
                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <label class="" for="password_confirmation">{{ __('messages.confPass') }}
                        <i class=" bi bi-lock-fill"></i>
                    </label>
                    <span class="label-input100">{{ __('messages.confPasswordObb') }}</span>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="input100 @error('password') is-invalid @enderror" placeholder="{{ __('messages.confermaPassword') }}" >
                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                    <span class="focus-input100"></span>
                </div>

                <button type="submit" class=" contact100-form-btn ">{{ __('messages.registrati') }}
                </button>
                
            </form>

        </div>

    </div>

</x-layout>