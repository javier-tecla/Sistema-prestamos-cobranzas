<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::create(['name' => 'SUPER ADMINISTRADOR']);
        Role::create(['name' => 'ADMINISTRADOR']);
        Role::create(['name' => 'PRESTAMISTA']);
        Role::create(['name' => 'FACTURADOR']);
        Role::create(['name' => 'COBRADOR']);

        User::factory()->create([
            'name' => 'Javier Borjas',
            'email' => 'cristman11@gmail.com',
            'nombres' => 'Javier',
            'apellidos' => 'Borjas',
            'tipo_documento' => 'DNI',
            'numero_documento' => '95123456',
            'celular' => '1136251411',
            'direccion' => 'Mitre 245',
            'fecha_nacimiento' => '30-08-1980',
            'genero' => 'Masculino',
            'foto_perfil' => 'null',
            'contacto_nombre' => 'Contact Name',
            'contacto_telefono' => '987654321',
            'contacto_relacion' => 'Friend',
            'estado' => 'Activo',
        ]);
    }
}
