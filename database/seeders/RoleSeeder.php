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
        $super_admin = Role::create(['name' => 'SUPER ADMINISTRADOR']);
        Role::create(['name' => 'ADMINISTRADOR']);
        Role::create(['name' => 'PRESTAMISTA']);
        Role::create(['name' => 'FACTURADOR']);
        Role::create(['name' => 'COBRADOR']);
        Role::create(['name' => 'CLIENTE']);

        //permisos para ajustes
        Permission::create(['name' => 'Ver formulario de ajustes'])->syncRoles($super_admin);
        Permission::create(['name' => 'Editar ajustes'])->syncRoles($super_admin);

        //permisos para roles
        Permission::create(['name' => 'Ver listado de roles'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de creacion de rol'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de permisos del rol'])->syncRoles($super_admin);
        Permission::create(['name' => 'Actualizar permisos del rol'])->syncRoles($super_admin);
        Permission::create(['name' => 'Guardar rol'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver datos del rol'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de edicion del rol'])->syncRoles($super_admin);
        Permission::create(['name' => 'Actualizar rol'])->syncRoles($super_admin);
        Permission::create(['name' => 'Eliminar rol'])->syncRoles($super_admin);

        //permisos para usuarios
        Permission::create(['name' => 'Ver listado de usuarios'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de creacion de usuario'])->syncRoles($super_admin);
        Permission::create(['name' => 'Guardar usuario'])->syncRoles($super_admin);
        Permission::create(['name' => 'Restaurar usuario'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver datos del usuario'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de edicion del usuario'])->syncRoles($super_admin);
        Permission::create(['name' => 'Actualizar usuario'])->syncRoles($super_admin);
        Permission::create(['name' => 'Eliminar usuario'])->syncRoles($super_admin);

        //permisos para clientes
        Permission::create(['name' => 'Ver listado de clientes'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de creacion de cliente'])->syncRoles($super_admin);
        Permission::create(['name' => 'Guardar cliente'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver datos del cliente'])->syncRoles($super_admin);
        Permission::create(['name' => 'Restaurar cliente'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de edicion del cliente'])->syncRoles($super_admin);
        Permission::create(['name' => 'Actualizar cliente'])->syncRoles($super_admin);
        Permission::create(['name' => 'Eliminar cliente'])->syncRoles($super_admin);

        //permisos para categorias
        Permission::create(['name' => 'Ver listado de categorias'])->syncRoles($super_admin);
        Permission::create(['name' => 'Guardar categoria'])->syncRoles($super_admin);
        Permission::create(['name' => 'Actualizar categoria'])->syncRoles($super_admin);
        Permission::create(['name' => 'Eliminar categoria'])->syncRoles($super_admin);

        //permisos para prestamos
        Permission::create(['name' => 'Ver listado de prestamos'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de creacion de prestamo'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver contrato de prestamo'])->syncRoles($super_admin);
        Permission::create(['name' => 'Guardar prestamo'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver datos del prestamo'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver formulario de edicion del prestamo'])->syncRoles($super_admin);
        Permission::create(['name' => 'Actualizar prestamo'])->syncRoles($super_admin);
        Permission::create(['name' => 'Eliminar prestamo'])->syncRoles($super_admin);

        //permisos para pago
        Permission::create(['name' => 'Guardar pago'])->syncRoles($super_admin);
        Permission::create(['name' => 'Ver comprobante de pago'])->syncRoles($super_admin);
        Permission::create(['name' => 'Eliminar pago'])->syncRoles($super_admin);

        //permisos para notificaciones
        Permission::create(['name' => 'Ver listado de notificaciones'])->syncRoles($super_admin);
        Permission::create(['name' => 'Enviar notificacion por email'])->syncRoles($super_admin);
        Permission::create(['name' => 'Enviar notificacion por whatsapp'])->syncRoles($super_admin);


    }
}
