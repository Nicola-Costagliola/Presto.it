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
                                    <label for="msg" class="montserrat text_color_body">Motivo della richiesta</label>
                                    <textarea name="msg" id="msg" rows="3" class="form-control"></textarea>
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