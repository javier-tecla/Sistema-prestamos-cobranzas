<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //roles iniciales del sistema
        Role::create(['name' => 'SUPER ADMINISTRADOR']);
        Role::create(['name' => 'ADMINISTRADOR']);
        Role::create(['name' => 'PRESTAMISTA']);
        Role::create(['name' => 'FACTURADOR']);
        Role::create(['name' => 'COBRADOR']);
        Role::create(['name' => 'CLIENTE']);

        //permisos para ajustes
        Permission::create(['name' => 'Ver formulario de ajustes']);
        Permission::create(['name' => 'Editar ajustes']);

        //permisos para roles
        Permission::create(['name' => 'Ver listado de roles']);
        Permission::create(['name' => 'Ver formulario de creacion de rol']);
        Permission::create(['name' => 'Guardar rol']);
        Permission::create(['name' => 'Ver datos del rol']);
        Permission::create(['name' => 'Ver formulario de edicion del rol']);
        Permission::create(['name' => 'Actualizar rol']);
        Permission::create(['name' => 'Eliminar rol']);

        //permisos para usuarios
        Permission::create(['name' => 'Ver listado de usuarios']);
        Permission::create(['name' => 'Ver formulario de creacion de usuario']);
        Permission::create(['name' => 'Guardar usuario']);
        Permission::create(['name' => 'Restaurar usuario']);
        Permission::create(['name' => 'Ver datos del usuario']);
        Permission::create(['name' => 'Ver formulario de edicion del usuario']);
        Permission::create(['name' => 'Actualizar usuario']);
        Permission::create(['name' => 'Eliminar usuario']);

        //permisos para categorias
        Permission::create(['name' => 'Ver listado de categorias']);
        Permission::create(['name' => 'Guardar categoria']);
        Permission::create(['name' => 'Actualizar categoria']);
        Permission::create(['name' => 'Eliminar categoria']);

        //permisos para prestamos
        Permission::create(['name' => 'Ver listado de prestamos']);
        Permission::create(['name' => 'Ver formulario de creacion de prestamo']);
        Permission::create(['name' => 'Ver contrato de prestamo']);
        Permission::create(['name' => 'Guardar prestamo']);
        Permission::create(['name' => 'Ver datos del prestamo']);
        Permission::create(['name' => 'Ver formulario de edicion del prestamo']);
        Permission::create(['name' => 'Actualizar prestamo']);
        Permission::create(['name' => 'Eliminar prestamo']);

        //permisos para pago
        Permission::create(['name' => 'Guardar pago']);
        Permission::create(['name' => 'Ver comprobante de pago']);
        Permission::create(['name' => 'Eliminar pago']);

        //permisos para notificaciones
        Permission::create(['name' => 'Ver listado de notificaciones']);
        Permission::create(['name' => 'Enviar notificacion por email']);
        Permission::create(['name' => 'Enviar notificacion por whatsapp']);


    }
}
