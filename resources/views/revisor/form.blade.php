<x-layout>
    

    <div class="container mt-4">
    <div class="row">
                <div class="col-md-6 mx-auto ">

                    <h1 class="text_color montserrat ">Scrivi la tua richiesta</h1>

                    @if(session()->has('message'))
                        <div class="alert alert-success montserrat">
                        {{ session('message') }}
                        </div>
                    @endif


                    <div class="mt-4">
                        <form action="{{ route('become.revisor.send') }}" method="POST">
                            @csrf
                            <div class="row g-3">

                                <div class="col-12">
                                    <label for="name" class="montserrat text_color_body">Nome</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>

                                <div class="col-12">
                                    <label for="email" class="montserrat text_color_body">Email</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>

                                <div class="col-12">
                                    <label for="message" class="montserrat text_color_body">Messaggio</label>
                                    <input type="message" id="message" rows="6" class="form-control">
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-prymary ">Invia</button>
                                </div>


                            </div>
                        </form>
                    </div>

                
                </div>
            </div>
    </div>
</x-layout>