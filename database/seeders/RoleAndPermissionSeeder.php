<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = Role::create(['name' => 'SuperAdmin']);
        $editor = Role::create(['name' => 'Editor']);

        $dashboard = Permission::create(['name' => 'dashboard']);        
        $widget = Permission::create(['name' => 'widget']);
        $datatable = Permission::create(['name' => 'datatable']);
        
        $admin_list = Permission::create(['name' => 'adminList']);
        $permission_list = Permission::create(['name' => 'permissionList']);
        $permission_create = Permission::create(['name' => 'permissionCreate']);
        $permission_edit = Permission::create(['name' => 'permissionEdit']);
        $permission_show = Permission::create(['name' => 'permissionShow']);
        $permission_delete = Permission::create(['name' => 'permissionDelete']);

        $role_list= Permission::create(['name' => 'roleList']);
        $role_create = Permission::create(['name' => 'roleCreate']);
        $role_edit = Permission::create(['name' => 'roleEdit']);
        $role_show = Permission::create(['name' => 'roleShow']);
        $role_delete = Permission::create(['name' => 'roleDelete']);

        

        $super_admin->givePermissionTo([$dashboard, $widget, $datatable, $admin_list, $permission_list, $permission_create, $permission_edit, $permission_show, $permission_delete, $role_list, $role_create, $role_edit, $role_show, $role_delete]);

        $editor->givePermissionTo([]);
    }
}
