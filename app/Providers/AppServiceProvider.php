<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade; // <-- Asegúrate de importar esto
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void { }

    public function boot(): void
    {
   
    // Esto le dice a Laravel: "Cuando veas layouts:: busca en components/layouts"
    Blade::anonymousComponentPath(resource_path('views/components/layouts'), 'layouts');
    
    // Esto le dice a Laravel: "Cuando veas pages:: busca en livewire/pages"
    Blade::anonymousComponentPath(resource_path('views/livewire/pages'), 'pages');
    
    }
}
