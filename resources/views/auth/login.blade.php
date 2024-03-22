<x-layout>
    <div class="container ">

        <div class="row mt-5  ">

            <h1 class=" mt-3  text-center display-5 text_color mt-5">Accedi</h1>

            <div class=" col-12 col-lg-6 mx-auto ">
                <div class=" form card mt-3  shadow">

                    <div class=" card-header text_color_body bi bi-person-circle "> Accedi
                    </div>
                    <div class=" card-body ">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="row g-3 ">
                                <div class="col-12">
                                    <label class="text_color_body bi bi-envelope" for="email"> Email</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value=" {{ old('email') }} ">
                                    @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password" class="text_color_body bi bi-lock-fill"> Password</label>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="remember" class="text_color_body bi bi-lock-fill">{{ __('messages.remember') }}</label>
                                    <input type="checkbox" id="remember" name="remember" class="" value="true">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class=" btn btn-primary text_color_body "> Entra
                                    </button>

                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

            <x-back />

        </div>
    </div>
</x-layout>