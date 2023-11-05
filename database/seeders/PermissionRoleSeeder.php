<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master_admin_permissions = Permission::all();
        $master_admin_permissionss = $master_admin_permissions->filter(function ($permission) {
            return $permission->title != 'lead_view_personal_sub_lead_access' && $permission->title != 'lead_personal_management_access';
        });
        $admin_permissions = $master_admin_permissions->filter(function ($permission) {
            return $permission->title != 'users_access' && $permission->title != 'user_management_access' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        $lead_permissions = $master_admin_permissions->filter(function ($permission) {
            return $permission->title != 'users_access' && $permission->title != 'user_management_access' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        $sale_permissions = $master_admin_permissions->filter(function ($permission) {
            return $permission->title != 'users_access' && $permission->title != 'user_management_access' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });

        Role::findOrFail(1)->permissions()->sync($master_admin_permissionss);
        Role::findOrFail(2)->permissions()->sync($admin_permissions);
        Role::findOrFail(4)->permissions()->sync($lead_permissions);
        Role::findOrFail(7)->permissions()->sync($sale_permissions);
    }
    // public function run()
    // {
    //     $master_admin_permissions = Permission::all();
    //     $admin_permissions = $master_admin_permissions->filter(function ($permission) {
    //         return $permission->title != 'users_access' && $permission->title != 'user_management_access' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
    //     });

    //     Role::findOrFail(1)->permissions()->sync($master_admin_permissions->pluck('id'));
    //     Role::findOrFail(2)->permissions()->sync($admin_permissions);
    // }
}
