<x-layouts::app title="Backups del sistema">
    <div class="relative mb-6 w-full">
        <div class="flex items-center justify-between mb-4">
            <flux:heading size="xl" level="1">Backups</flux:heading>
            <br>
            <flux:breadcrumbs>
                <flux:breadcrumbs.item href="{{ url('/admin') }}">Inicio</flux:breadcrumbs.item>
                <flux:breadcrumbs.item>Listado de backups</flux:breadcrumbs.item>

            </flux:breadcrumbs>
        </div>

        <flux:separator variant="subtle" />
    </div>

    <div class="mb-4">
        <form action="{{ route('admin.backups.store') }}" method="POST">
            @csrf
            <flux:button variant="primary" type="submit" icon="archive-box-arrow-down">
                Crear backup
            </flux:button>
        </form>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-200 dack:border-zinc-700 bg-white dark:bg-zinc-800 mt-6">
        <table class="min-w-full border-collapse text-sm">
            <thead class="bg-gray-50 dark:bg-zinc-900 text-center">
                <tr>
                    <th
                        class="px-4 py-3 boder-x border-b border-gray-200 dark:border-zinc-700 text-xs font-bold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Archivo
                    </th>
                    <th
                        class="px-4 py-3 boder-x border-b border-gray-200 dark:border-zinc-700 text-xs font-bold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Tamaño
                    </th>
                    <th
                        class="px-4 py-3 boder-x border-b border-gray-200 dark:border-zinc-700 text-xs font-bold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Fecha
                    </th>
                    <th
                        class="px-4 py-3 boder-x border-b border-gray-200 dark:border-zinc-700 text-xs font-bold text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-zinc-800">
                @forelse ($backups as $backup)
                    <tr
                        class="even:bg-slate-50 odd:bg-white dark:even:bg-zinc-700/20 dark:odd:bg-zinc-800 hover:bg-blue-50 dfark:hover:bg-zinc-700/50 transition">
                        <td
                            class="px-4 py-3 border border-gray-200 dark:border-zinc-700 text-gray-900 dark:text-gray-100">
                            {{ $backup['name'] }}
                        </td>
                        <td
                            class="px-4 py-3 border border-gray-200 dark:border-zinc-700 text-gray-900 dark:text-gray-100">
                            {{ number_format($backup['size'] / 1024 / 1024, 2) }} MB
                        </td>
                        <td
                            class="px-4 py-3 border border-gray-200 dark:border-zinc-700 text-gray-900 dark:text-gray-100">
                            {{ \Carbon\Carbon::createFromTimestamp($backup['last_modified'])->format('d/m/Y H:i:s') }}
                        </td>
                        <td class="px-4 py-3 border border-gray-200 dark:border-zinc-700 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.backups.download', ['file' => $backup['name']]) }}"
                                    class="inline-flex items-center px-3 py-1.5 bg-blue-500 hover:bg-blue-600 text-white text-xs font-semibold rounded transition">
                                    Descargar
                                </a>

                                <form action="{{ route('admin.backups.destroy', ['file' => $backup['name']]) }}"
                                    method="POST" onsubmit="return confirm('¿Eliminar este backup?');">
                                    @csrf
                                    <button type="submit"
                                        class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white text-xs font-semibold rounded transition">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-4 py-8 text-center text-gray-500" colspan="4">
                            No hay backups dísponibles
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts::app>
