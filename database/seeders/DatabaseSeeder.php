<?php

namespace Database\Seeders;

use App\Models\Ajuste;
use App\Models\Categoria;
use App\Models\Cliente;
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
        Role::create(['name' => 'CLIENTE']);

        User::create([
            'name' => 'Javier Borjas',
            'email' => 'cristman11@gmail.com',
            'password' => bcrypt('123456789'),
            // 'nombres' => 'Javier',
            // 'apellidos' => 'Borjas',
            // 'tipo_documento' => 'DNI',
            // 'numero_documento' => '95123456',
            // 'celular' => '1136251411',
            // 'direccion' => 'Mitre 245',
            // 'fecha_nacimiento' => '30-08-1980',
            // 'genero' => 'Masculino',
            // 'foto_perfil' => 'null',
            // 'contacto_nombre' => 'Contact Name',
            // 'contacto_telefono' => '987654321',
            // 'contacto_relacion' => 'Friend',
            // 'estado' => 'Activo',
        ])->assignRole('SUPER ADMINISTRADOR');

        Ajuste::create([
            'nombre' => 'Prestamos del sur',
            'descripcion' => 'Empresa de prestamos y cobranzas',
            'direccion' => 'Mitre 245',
            'telefono' => '1136251489',
            'email' => 'prestamos@delsur.com',
            'divisa' => 'AR$',
            'logo' => null,
            'web' => 'https://www.prestamosdelsur.com',
            'interes' => 10.00,
            'mora' => 2.00,
        ]);

        Cliente::factory(30)->create();

        Categoria::create(['nombre' => 'Préstamo Educatívo']);
        Categoria::create(['nombre' => 'Préstamo para Viajes']);
        Categoria::create(['nombre' => 'Préstamo para Salud']);
        Categoria::create(['nombre' => 'Préstamo Personal']);
        Categoria::create(['nombre' => 'Préstamo Comercial']);
        Categoria::create(['nombre' => 'Préstamo Hipotecario']);
        Categoria::create(['nombre' => 'Préstamo Automotriz']);
        Categoria::create(['nombre' => 'Préstamo Microcrédito']);
    }
}
