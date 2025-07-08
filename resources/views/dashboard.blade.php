{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Panel Principal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 rounded-xl shadow-lg p-8 text-white">
                <h1 class="text-3xl font-bold mb-4">¡Bienvenido!</h1>
                <p class="mb-6 text-pink-300">Desde aquí puedes gestionar tus registros de manera eficiente.</p>

                <div class="flex flex-col md:flex-row justify-center gap-4 mt-6">
                    <a href="{{ route('clients.index') }}"
                        class="flex items-center justify-center gap-2 px-6 py-3 border border-pink-300
                               text-pink-500 font-semibold rounded-lg hover:bg-pink-100 hover:text-pink-700
                               shadow-sm transition-all duration-300 bg-transparent">
                        <svg class="w-5 h-5 text-pink-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 7a3 3 0 11-6 0 3 3 0 016 0zM4 13a4 4 0 014-4h4a4 4 0 014 4v1H4v-1z" />
                        </svg>
                        Ver Clientes Registrados
                    </a>

                    <a href="{{ route('clients.create') }}"
                        class="flex items-center justify-center gap-2 px-6 py-3 border border-pink-300
                               text-pink-500 font-semibold rounded-lg hover:bg-pink-100 hover:text-pink-700
                               shadow-sm transition-all duration-300 bg-transparent">
                        <svg class="w-5 h-5 text-pink-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Registrar Nuevo Cliente
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
