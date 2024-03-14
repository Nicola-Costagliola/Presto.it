<div class=" mt-3 ">
    @if(session()->has('message'))
    <div class="alert alert-success ">
      {{ session('message') }}
     </div>
    @elseif(session()->has('error'))
    <div class="alert bg-danger ">
      {{ session('error') }}
     </div>
@endif
</div>