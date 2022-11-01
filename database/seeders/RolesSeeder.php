<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //Roles
        $adminRole = Role::create(['name' => 'admin']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $clientRole = Role::create(['name' => 'client']);

        //Permissions
        $uploadPhotoPermission = Permission::create(['name' => 'upload photo']);
        $deletePhotoPermission = Permission::create(['name' => 'delete photo']);
        $editPhotoPermission = Permission::create(['name' => 'edit photo']);

        $deleteUserPermission = Permission::create(['name' => 'delete user']);



        $adminRole->givePermissionTo($uploadPhotoPermission, $deletePhotoPermission, $editPhotoPermission, $deleteUserPermission);

        $moderatorRole->givePermissionTo($uploadPhotoPermission, $deletePhotoPermission, $editPhotoPermission);

        $clientRole->revokePermissionTo($uploadPhotoPermission, $deletePhotoPermission, $editPhotoPermission, $deleteUserPermission);


        $user = User::where('id', 1)->first();
        $user->assignRole('admin');
    }
}
