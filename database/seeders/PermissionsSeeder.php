<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Réinitialiser les rôles et les autorisations mis en cache
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //créer des autorisations pour les cours
        Permission::create(['name' => 'create course']);
        Permission::create(['name' => 'view course']);
        Permission::create(['name' => 'update course']);
        Permission::create(['name' => 'edit course']);
        Permission::create(['name' => 'publish course']);
        Permission::create(['name' => 'unpublish course']);
        Permission::create(['name' => 'delete course']);

        //créer des rôles et attribuer des autorisations existantes
        $role1 = Role::create(['name' => 'super-admin']);
        $role1->givePermissionTo('create course');
        $role1->givePermissionTo('view course');
        $role1->givePermissionTo('update course');
        $role1->givePermissionTo('edit course');
        $role1->givePermissionTo('publish course');
        $role1->givePermissionTo('unpublish course');
        $role1->givePermissionTo('delete course');

        $role2 = Role::create(['name' => 'etudiant']);
        $role2->givePermissionTo('view course');
    }
}
