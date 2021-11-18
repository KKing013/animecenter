<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center bg-red-500 text-white uppercase font-semibold text-sm py-2 px-10 rounded-2xl hover:bg-red-600']) }}>
    {{ $slot }}
</button>
