<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function assignPermissions()
    {
        // Create Permissions if they don't exist
        Permission::create(['name' => 'create shop']);
        Permission::create(['name' => 'edit shop']);
        Permission::create(['name' => 'delete shop']);

        // Create Roles if they don't exist
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $customerRole = Role::create(['name' => 'customer']); // Example of a customer role

        // Assign Permissions to Roles
        $adminRole->givePermissionTo(['create shop', 'edit shop', 'delete shop']);
        $managerRole->givePermissionTo(['edit shop']);
        $customerRole->givePermissionTo(['view shop']);  // For example, customers can only view the shops

        // Optionally, assign the roles to specific users
        $user = \App\Models\User::find(1); // Find user by ID (Example: user with ID 1)
        $user->assignRole('admin'); // Assign the 'admin' role to this user

        return response()->json(['message' => 'Roles and permissions assigned successfully']);
    }
}
