<x-layout>

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

            <div class="col-6 mt-4">
            <span class="mt-5 ">Non sei ancora registrato?</span>
                <a href="/register" class=" btn shadow mx-0 text-white">Registrati</a>
            </div>
        </div>

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