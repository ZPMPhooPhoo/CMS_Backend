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
        $admin = Role::create(['name' => 'Admin']);
        $manager = Role::create(['name' => 'Manager']);
        $developer = Role::create(['name' => 'Developer']);
        $customer = Role::create(['name' => 'Customer']);

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

        $category_list = Permission::create(['name' => 'categoryList']);
        $category_create = Permission::create(['name' => 'categoryCreate']);
        $category_edit = Permission::create(['name' => 'categoryEdit']);
        $category_show = Permission::create(['name' => 'categoryShow']);
        $category_delete = Permission::create(['name' => 'categoryDelete']);

        $contract_list = Permission::create(['name' => 'contractList']);
        $contract_create = Permission::create(['name' => 'contractCreate']);
        $contract_edit = Permission::create(['name' => 'contractEdit']);
        $contract_show = Permission::create(['name' => 'contractShow']);
        $contract_delete = Permission::create(['name' => 'contractDelete']);

        $invoice_list = Permission::create(['name' => 'invoiceList']);
        $invoice_create = Permission::create(['name' => 'invoiceCreate']);
        $invoice_edit = Permission::create(['name' => 'invoiceEdit']);
        $invoice_show = Permission::create(['name' => 'invoiceShow']);
        $invoice_delete = Permission::create(['name' => 'invoiceDelete']);

        $project_list = Permission::create(['name' => 'projectList']);
        $project_create = Permission::create(['name' => 'projectCreate']);
        $project_edit = Permission::create(['name' => 'projectEdit']);
        $project_show = Permission::create(['name' => 'projectShow']);
        $project_delete = Permission::create(['name' => 'projectDelete']);

        $quotation_list = Permission::create(['name' => 'quotationList']);
        $quotation_create = Permission::create(['name' => 'quotationCreate']);
        $quotation_edit = Permission::create(['name' => 'quotationEdit']);
        $quotation_show = Permission::create(['name' => 'quotationShow']);
        $quotation_delete = Permission::create(['name' => 'quotationDelete']);

        $receipt_list = Permission::create(['name' => 'receiptList']);
        $receipt_create = Permission::create(['name' => 'receiptCreate']);
        $receipt_edit = Permission::create(['name' => 'receiptEdit']);
        $receipt_show = Permission::create(['name' => 'receiptShow']);
        $receipt_delete = Permission::create(['name' => 'receiptDelete']);

        $user_list = Permission::create(['name' => 'userList']);
        $user_create = Permission::create(['name' => 'userCreate']);
        $user_edit = Permission::create(['name' => 'userEdit']);
        $user_show = Permission::create(['name' => 'userShow']);
        $user_delete = Permission::create(['name' => 'userDelete']);

        $super_admin->givePermissionTo([$dashboard, $widget, $datatable, $admin_list, $permission_list, $permission_create, $permission_edit, $permission_show, $permission_delete, $role_list, $role_create, $role_edit, $role_show, $role_delete, $category_list, $category_create, $category_edit, $category_show, $category_delete, $contract_list, $contract_create, $contract_edit, $contract_show, $contract_delete, $invoice_list, $invoice_create, $invoice_edit, $invoice_show, $invoice_delete, $project_list, $project_create, $project_edit, $project_show, $project_delete, $quotation_list, $quotation_create, $quotation_edit, $quotation_show, $quotation_delete, $receipt_list, $receipt_create, $receipt_edit, $receipt_show, $receipt_delete, $user_list, $user_create, $user_edit, $user_show, $user_delete]);

        $admin->givePermissionTo([]);
        $manager->givePermissionTo([]);
        $developer->givePermissionTo([]);
        $customer->givePermissionTo([]);
    }
}
