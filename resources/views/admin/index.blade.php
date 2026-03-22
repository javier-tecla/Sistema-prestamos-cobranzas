<x-layouts::app :title="'Sistema de Prestamos y Cobranzas - Admin'">
    <div class="mb-6">
        <flux:heading size="xl" level="1">Bienvenido al Sistema</flux:heading>
        <flux:text class="mt-2 text-gray-600 dark:text-gray-400">
            Resumen general del sistema de préstamos y cobranzas
        </flux:text>
    </div>

    <flux:separator variant="subtle" />

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <!--Total Clientes -->
        <div
            class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-3 shadow-md hover:shadow-lg transition">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <flux:text class="text-gray-600 dark:text-gray-400 text-sm font-medium">Total Clientes</flux:text>
                    <flux:heading size="lg" level="3" class="mt-2 text-gray-900 dark:text-white">
                        {{ $totalClientes ?? 0 }}
                    </flux:heading>
                    <flux:text class="text-blue-600 dark:yexy-blue-400 text-xs mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        {{ $clientesNuevosMes ?? 0 }} nuevos este mes
                    </flux:text>
                </div>
                <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                    <i class="fas fa-users text-blue-600 dark:text-blue-400 text-2xl"></i>
                </div>
            </div>
            <div class="h-12" style="margin-top:-25px">
                <canvas id="chartClientes" class="w-full block" height="48"></canvas>
            </div>
        </div>
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</x-layouts::app>
