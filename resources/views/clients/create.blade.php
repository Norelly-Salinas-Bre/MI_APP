<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Crear Cliente
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto mt-10 p-8 bg-gray-800 rounded-xl shadow-lg">
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-800 rounded shadow">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('clients.store') }}">
            @csrf

            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-white">Nombres:</label>
                <input type="text" name="first_name" id="first_name" required pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+"
                    class="mt-1 block w-full rounded-md bg-white text-gray-900 border-gray-300 focus:border-pink-500 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-white">Apellidos:</label>
                <input type="text" name="last_name" id="last_name" required pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+"
                    class="mt-1 block w-full rounded-md bg-white text-gray-900 border-gray-300 focus:border-pink-500 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
            </div>

            <div class="mb-4">
                <label for="document_type" class="block text-sm font-medium text-white">Tipo de documento:</label>
                 <select name="document_type" id="document_type" required
                     class="mt-1 block w-full rounded-md bg-white text-gray-900 border-gray-300 focus:border-pink-500 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
                         <option value="">-- Selecciona --</option>
                         <option value="TI">Tarjeta de Identidad</option>
                         <option value="CC">Cédula de Ciudadanía</option>
                         <option value="CE">Cédula de Extranjería</option>
                         <option value="PA">Pasaporte</option>
                 </select>

            </div>

            <div class="mb-4">
                <label for="document_number" class="block text-sm font-medium text-white">Número de documento:</label>
                <input type="text" name="document_number" id="document_number" required pattern="[0-9]{6,15}"
                    class="mt-1 block w-full rounded-md bg-white text-gray-900 border-gray-300 focus:border-pink-500 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-white">Correo electrónico:</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full rounded-md bg-white text-gray-900 border-gray-300 focus:border-pink-500 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-pink-600 hover:bg-pink-700 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200">
                    Guardar Cliente
                </button>
            </div>
        </form>

        <div class="mt-6">
            <a href="{{ route('clients.index') }}" class="text-pink-300 hover:underline text-sm">
                ← Ver clientes
            </a>
        </div>
    </div>
</x-app-layout>
