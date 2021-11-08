@if (session()->has('success'))
    <div style="display:block" id="success"
        class="fixed bg-red-500 text-white py-2 px-4 rounded-xl bottom-3 left-3 text-sm">
        <p> {{ session('success') }} </p>
    </div>

@endif
