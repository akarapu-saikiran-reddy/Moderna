<button {{ $attributes->merge(['type' => 'button','class' =>'inline-block p-16 px-12 py-2 text-base font-normal text-center text-white transition-all duration-500 ease-in-out bg-blue-500 border border-blue-500 rounded shadow-md hover:shadow-md hover:bg-blue-600 hover:text-white'])  }}>
    {{ $slot }}
</button>