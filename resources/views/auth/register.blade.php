<x-layout>
    <div class="container">
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
                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value=" {{ old('name') }} ">
                                    @error('name') <span class=" text-danger small "> {{ __('messages.name') }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="email" class="text_color_body bi bi-envelope">{{ __('messages.inserisciEmail') }}</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value=" {{ old('email') }} ">
                                    @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password" class="text_color_body bi bi-lock-fill">{{ __('messages.inserisciPassword') }}</label>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password_confirmation" class="text_color_body bi bi-lock-fill">{{ __('messages.confermaPassword') }}</label>
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

    </div>
</x-layout>