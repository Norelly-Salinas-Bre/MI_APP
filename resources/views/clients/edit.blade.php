<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Editar Cliente
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto mt-10 p-8 bg-gray-800 rounded-xl shadow-lg">
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('clients.update', $client) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm text-white font-medium">Nombres:</label>
                <input type="text" name="first_name" required pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+"
                    value="{{ old('first_name', $client->first_name) }}"
                    class="w-full rounded-md bg-white text-gray-900 border-gray-300 px-3 py-2">
            </div>

            <div>
                <label class="block text-sm text-white font-medium">Apellidos:</label>
                <input type="text" name="last_name" required pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+"
                    value="{{ old('last_name', $client->last_name) }}"
                    class="w-full rounded-md bg-white text-gray-900 border-gray-300 px-3 py-2">
            </div>

            <div>
                <label class="block text-sm text-white font-medium">Tipo de documento:</label>
                  <select name="document_type" id="document_type" required
                   class="mt-1 block w-full rounded-md bg-white text-gray-900 border-gray-300 focus:border-pink-500 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
                     <option value="">-- Selecciona --</option>
                     <option value="TI" {{ old('document_type', $client->document_type ?? '') == 'TI' ? 'selected' : '' }}>Tarjeta de Identidad</option>
                     <option value="CC" {{ old('document_type', $client->document_type ?? '') == 'CC' ? 'selected' : '' }}>Cédula de Ciudadanía</option>
                     <option value="CE" {{ old('document_type', $client->document_type ?? '') == 'CE' ? 'selected' : '' }}>Cédula de Extranjería</option>
                     <option value="PA" {{ old('document_type', $client->document_type ?? '') == 'PA' ? 'selected' : '' }}>Pasaporte</option>
                </select>

            </div>

            <div>
                <label class="block text-sm text-white font-medium">Número de documento:</label>
                <input type="text" name="document_number" required pattern="[0-9]{6,15}"
                    value="{{ old('document_number', $client->document_number) }}"
                    class="w-full rounded-md bg-white text-gray-900 border-gray-300 px-3 py-2">
            </div>

            <div>
                <label class="block text-sm text-white font-medium">Correo electrónico:</label>
                <input type="email" name="email"
                    value="{{ old('email', $client->email) }}" required
                    class="w-full rounded-md bg-white text-gray-900 border-gray-300 px-3 py-2">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('clients.index') }}" class="text-pink-300 hover:underline text-sm">← Cancelar</a>
                <button type="submit"
                    class="bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded-lg shadow-lg">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
