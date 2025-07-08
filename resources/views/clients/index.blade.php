<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Clientes Registrados
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-800 rounded shadow">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-gray-800 text-white rounded-xl shadow-lg p-6">
                <div class="mb-6 flex flex-col md:flex-row justify-between items-center gap-4">
                    <form method="GET" action="{{ route('clients.index') }}" class="mb-4 w-full max-w-md">
                        <input type="text" name="search" placeholder="Buscar por nombre, apellido o número de documento"
                               class="w-full px-4 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-pink-500"
                               value="{{ request('search') }}">
                        <button type="submit"
                                class="mt-2 bg-pink-600 hover:bg-pink-700 text-white font-semibold px-4 py-2 rounded shadow transition">
                            Buscar
                        </button>
                    </form>

                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('clients.create') }}"
                          class="bg-pink-600 hover:bg-pink-700 text-white font-semibold px-4 py-2 rounded shadow transition">
                           + Crear nuevo cliente
                        </a>

                        <a href="{{ route('clients.export') }}"
                          class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded shadow transition">
                           📥 Exportar a Excel
                        </a>
                    </div>

                    <a href="{{ route('dashboard') }}" class="text-sm text-pink-300 hover:underline">
                       ← Volver al Dashboard
                    </a>
                </div>

                @if ($clients->count())
                    <table class="w-full table-auto text-sm text-left border-collapse">
                        <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                            <tr>
                                <th class="px-4 py-2 border">Nombres</th>
                                <th class="px-4 py-2 border">Apellidos</th>
                                <th class="px-4 py-2 border">Tipo doc.</th>
                                <th class="px-4 py-2 border">Número</th>
                                <th class="px-4 py-2 border">Correo</th>
                                <th class="px-4 py-2 border text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @foreach ($clients as $client)
                                <tr class="border-t border-gray-700 hover:bg-gray-700">
                                    <td class="px-4 py-2">{{ $client->first_name }}</td>
                                    <td class="px-4 py-2">{{ $client->last_name }}</td>
                                    <td class="px-4 py-2">{{ $client->document_type }}</td>
                                    <td class="px-4 py-2">{{ $client->document_number }}</td>
                                    <td class="px-4 py-2">{{ $client->email }}</td>
                                    <td class="px-4 py-2 flex justify-center gap-2">
                                        <a href="{{ route('clients.edit', $client) }}"
                                           class="text-white bg-gradient-to-br from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600
                                           focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800
                                           font-medium rounded-lg text-sm px-5 py-2 text-center transition-all shadow">
                                            Editar
                                        </a>

                                        <form method="POST" action="{{ route('clients.destroy', $client) }}" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                class="btn-delete text-white bg-gradient-to-br from-pink-600 to-fuchsia-600 hover:from-pink-700 hover:to-fuchsia-700
                                                focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-fuchsia-800
                                                font-medium rounded-lg text-sm px-5 py-2 text-center transition-all shadow">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-6">
                        {{ $clients->links() }}
                    </div>

                    @if (request('search'))
                        <p class="mt-4 text-sm text-pink-300">
                            Resultados encontrados para: <strong>{{ request('search') }}</strong>
                        </p>
                    @endif

                @else
                    <p class="text-center text-gray-300 mt-4">
                        Aún no hay clientes registrados.
                    </p>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const form = this.closest('form');

                    Swal.fire({
                        title: '¿Estás segura?',
                        text: "¡Esta acción no se puede deshacer!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#6b7280',
                        confirmButtonText: 'Sí, eliminar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
    @endpush
</x-app-layout>
