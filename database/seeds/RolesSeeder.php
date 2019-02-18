<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['guard_name' => 'web', 'name' => 'admin']);
        $manager = Role::create(['guard_name' => 'web', 'name' => 'manager']);

        $viewUsers = Permission::create(['guard_name' => 'web', 'name' => 'view users']);
        $editUsers = Permission::create(['guard_name' => 'web', 'name' => 'edit users']);
        $viewSettings = Permission::create(['guard_name' => 'web', 'name' => 'view settings']);
        $editSettings = Permission::create(['guard_name' => 'web', 'name' => 'edit settings']);

        $viewOrders = Permission::create(['guard_name' => 'web', 'name' => 'view orders']);
        $editOrders = Permission::create(['guard_name' => 'web', 'name' => 'edit orders']);
        $viewProducts = Permission::create(['guard_name' => 'web', 'name' => 'view products']);
        $editProducts = Permission::create(['guard_name' => 'web', 'name' => 'edit products']);

        $user_admin = User::findOrFail(1)->assignRole('admin');
        $user_manager = User::findOrFail(2)->assignRole('manager');

        $manager->syncPermissions( [$viewSettings, $viewOrders, $editOrders, $viewProducts, $editProducts] );
        $admin->syncPermissions( [$viewUsers, $editUsers, $viewSettings, $editSettings, $viewOrders, $editOrders, $viewProducts, $editProducts] );
    }
}
