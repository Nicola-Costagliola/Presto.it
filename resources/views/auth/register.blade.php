<x-layout>
    <div class="container">
        <h1 class=" mt-3 text-center display-5 text_color "> Registrati</h1>
        <div class="row">
            <div class="col-md-4 mx-auto ">
                <div class=" form card mt-3  ">
                    <div class=" card-header text_color_body bi bi-person-circle">
                        Registrati
                    </div>
                    <div class=" card-body ">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="row g-3 ">
                                <div class="col-12">
                                    <label for="name" class="text_color_body bi bi-person"> Inserisci il tuo nome</label>
                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value=" {{ old('name') }} ">
                                    @error('name') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="email" class="text_color_body bi bi-envelope"> Inserisci la tua Email</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value=" {{ old('email') }} ">
                                    @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password" class="text_color_body bi bi-lock-fill">Inserisci Password</label>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password_confirmation" class="text_color_body bi bi-lock-fill">Conferma Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class=" btn btn-primary text_color_body "> Registrati
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </form>
        </div>

        <x-back />
        
    </div>
</x-layout>