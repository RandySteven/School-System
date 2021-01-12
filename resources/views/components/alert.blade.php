@if (Session::has('success'))
    <div class="px-10 py-3 w-full bg-green-400 text-green-700 text-center">
        {{ Session::get('success') }}
    </div>
@elseif(Session::has('error'))
    <div class="px-10 py-3 w-full bg-red-400 text-red-700 text-center">
        {{ Session::get('error') }}
    </div>
@endif
