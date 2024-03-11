<x-layout>
    <div class="container">
        <h1 class=" mt-3  text-center display-5 text_color ">Accedi</h1>

        
        <div class="row mt-2 ">
            <div class="col-md-4 mx-auto ">
                <div class=" form card mt-3  ">

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
                                    <button type="submit" class=" btn btn-primary text_color_body "> Entra
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