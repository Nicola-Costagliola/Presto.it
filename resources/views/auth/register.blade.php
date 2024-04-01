<x-layout>

    <x-back />

    <div class="container-contact100 ">

        <div class="p-2 shadow border rounded-4">
            <div class="wrap-contact100 shadow">


                <div class="row">
                    <div class="col-6">
                        <a class="navbar-brand d-flex align-items-center " href="{{ route('home') }}">
                            <img src="{{asset('Logo/Logo2-no-bg.png')}}" class="img-fluid mb-4 " style="height: 150px" alt="resources/images/Logo">
                            <a class="testo-primario text_color display-6 "
                            href="{{ route('home') }}"></a>
                        </a>
                    </div>

                    <div class="col-6 mt-4 ">
                        <span class="mx-auto text-info fw-bold ">Hai già un account?</span>
                        <a href="/login" class=" btn shadow mx-5 text-white ">Accedi</a>
                    </div>
                </div>

                    <form action="/register" method="POST" class="contact100-form validate-form">
                    @csrf


                        <span class="contact100-form-title text-white ">{{ __('messages.registrati') }}
                            <i class="bi bi-person-circle"></i>
                        </span>

                        <div class="wrap-input100 validate-input">
                            <label class="text_color fw-semibold fs-4" for="name">{{ __('messages.nome') }}
                                <i class="bi bi-person"></i>
                            </label>
                            <span class="small text-info">{{ __('messages.nomeObb') }}</span>
                            <input type="text" id="name" name="name" class="input100 text-light @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="{{ __('messages.inserisciNome') }}">
                            @error('name') <span class=" text-danger small ">{{ __('messages.name') }} </span>  @enderror
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input">

                            <label class="text_color fw-semibold fs-4" for="email"> Email
                                <i class="bi bi-envelope"></i>
                            </label>
                            <span class="small text-info">{{ __('messages.emailObb') }}</span>
                            <input type="email" id="email" name="email" class="input100 @error('email') is-invalid @enderror" value=" {{ old('email') }} " placeholder="{{ __('messages.inserisciEmail') }}">
                            @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <label class="text_color fw-semibold fs-4" for="password"> Password
                                <i class=" bi bi-lock-fill"></i>
                            </label>
                            <span class="small text-info">{{ __('messages.passwordObb') }}</span>
                            <input type="password" id="password" name="password" class="input100 @error('password') is-invalid @enderror" placeholder="{{ __('messages.inserisciPassword') }}">
                            @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <label class="text_color fw-semibold fs-4" for="password_confirmation">{{ __('messages.confPass') }}
                                <i class=" bi bi-lock-fill"></i>
                            </label>
                            <span class="small text-info">{{ __('messages.confPasswordObb') }}</span>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="input100 @error('password') is-invalid @enderror" placeholder="{{ __('messages.confermaPassword') }}" >
                            @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                            <span class="focus-input100"></span>
                        </div>

                        <button type="submit" class=" contact100-form-btn rounded-3">{{ __('messages.registrati') }}
                        </button>

                    </form>

            </div>
        </div>




    </div>

</x-layout>