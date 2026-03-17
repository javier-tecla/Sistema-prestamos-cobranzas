<x-layouts::app title="Datos de la categoría">

    <div class="relative mb-6 w-full">
        <div class="flex items-center justify-between mb-4">
            <flux:heading size="xl" level="1">Datos de la categoría</flux:heading>
            <br>
            <flux:breadcrumbs>
                <flux:breadcrumbs.item href="{{ url('/admin') }}">Inicio</flux:breadcrumbs.item>
                <flux:breadcrumbs.item href="{{ url('admin/categorias') }}">Listado de categorias</flux:breadcrumbs.item>
                <flux:breadcrumbs.item>Datos de la categoria: {{ Str::lower($categoria->nombre) }}
                </flux:breadcrumbs.item>
            </flux:breadcrumbs>
        </div>
        <flux:separator variant="subtle" />
    </div>
    <br>

    {{-- Card --}}
    <div
        class="bg-white dark:bg-neutral-800 border-t border-gray-200 dark:border-gray-700 rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl">


        {{-- Body --}}
        <div class="p-12">

            <!-- Formulario en grid responsivo: 1 columna en móvil, 2 en md+ -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <flux:field>
                        <flux:label class="flex items-center gap-1">Nombre de la categoria </flux:label>
                        <p class="text-gray-600"><i class="fas fa-shield-alt mr-2"></i> {{ $categoria->nombre }}</p>
                    </flux:field>
                </div>

                <div class="mb-4">
                    <flux:field>
                        <flux:label class="flex items-center gap-1">Fecha y hora de registro </flux:label>
                        <p class="text-gray-600"><i class="fas fa-clock mr-2"></i>
                            {{ $categoria->created_at->format('d/m/Y g:i a') }}</p>
                    </flux:field>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div
            class="bg-gray-50 dark:bg-neutral-700 border-t border-gray-200 dark:border-gray-700 rounded-b-lg p-6 text-left">
            <div class="flex space-x-3">
                <a href="{{ url('/admin/categorias') }}"
                    class="px-5 py-3  text-sm font-medium text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none 
                        focus:ring-2 focus:ring-gray-200 focus:ring-offset-1 transition-all duration-200 inline-flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al listado
                </a>


            </div>
        </div>
    </div>
    {{-- Card --}}


    <script>
        (function() {
            const actualBtn = document.getElementById('logo-input');
            if (!actualBtn) return;
            // prevent re-initialization when Livewire swaps DOM
            if (actualBtn.dataset.logoInitialized) return;
            actualBtn.dataset.logoInitialized = '1';

            const fileChosen = document.getElementById('file-chosen');
            const preview = document.getElementById('image-preview');
            const placeholderIcon = document.getElementById('placeholder-icon');

            actualBtn.addEventListener('change', function() {
                const file = this.files[0];

                if (file) {
                    // Actualizar texto del nombre
                    fileChosen.textContent = file.name;
                    fileChosen.classList.remove('text-slate-400');
                    fileChosen.classList.add('text-indigo-600', 'font-medium');

                    // Lógica de Previsualización
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.classList.remove('hidden');
                        placeholderIcon.classList.add('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            });
        })();
    </script>


</x-layouts::app>
