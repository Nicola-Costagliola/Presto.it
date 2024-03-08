<x-layout>
    <div class="container">
        <h1 class=" mt-3 text-center display-5">Registrati</h1>
        <div class="row">
            <div class="col-md-4 mx-auto ">
                <div class=" card mt-3  ">
                    <div class=" card-header ">
                        Registrati
                    </div>
                    <div class=" card-body ">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="row g-3 ">
                                <div class="col-12">
                                    <label for="name">Inserisci il tuo nome</label>
                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value=" {{ old('name') }} ">
                                    @error('name') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="email">Inserisci la tua Email</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value=" {{ old('email') }} ">
                                    @error('email') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password">Inserisci Password</label>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password_confirmation">Conferma Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <span class=" text-danger small "> {{ $message }} </span>  @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class=" btn btn-primary "> Registrati
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </form>
        </div>
    </div>
</x-layout>