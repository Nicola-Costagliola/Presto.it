<form class=" d-inline " action="{{route('setLocale', $lang) }}" method="POST">
    @csrf

        <button type="submit" class=" btn p-0 ">
        <img  type="submit" src="{{ asset('vendor/blade-flags/language-'.$lang.'.svg') }}" width="22" height="22">
        </button>

</form>