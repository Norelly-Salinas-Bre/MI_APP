<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">Dashboard Abogado</h2>
    </x-slot>

    <div class="py-6 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-card title="Casos activos" :value="$cases->where('status', 'abierto')->count()" />
            <x-card title="Casos cerrados" :value="$cases->where('status', 'cerrado')->count()" />
            <x-card title="Conceptos emitidos" :value="$cases->whereNotNull('legal_opinion')->count()" />
        </div>
    </div>
</x-app-layout>
