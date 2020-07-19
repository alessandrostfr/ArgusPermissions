<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;

class ArgusPermissionsInfoSeeder extends Seeder
{


    public function run()
    {

        //Truncate tables/Limpiamos las tablas
        DB::statement("SET foreign_key_checks=0");//pausar las foreign key
        DB::table('role_user')->truncate();
        DB::table('permission_role')->truncate();
        Permission::truncate();
        Role::truncate();
        DB::statement("SET foreign_key_checks=1");//reactivamos las foreign key


        //User admin
        $useradmin = User::where('email', 'Argus@admin.com')->first();
        if($useradmin){
            $useradmin->delete();
        }
        $useradmin = User::create([
            'name' => 'ArgusAdmin',
            'email' => 'Argus@admin.com',
            'password' => Hash::make('lovecode00')
        ]);



        //Rol admin
        $roladmin=Role::create([
            'name' => 'Admin', 
            'slug' => 'admin', 
            'description' => 'Administrador', 
            'full-access' => 'yes'
        ]);

        //Rol Registered Users
        $roluser=Role::create([
            'name' => 'Registered Users', 
            'slug' => 'registereduser', 
            'description' => 'Registered Users', 
            'full-access' => 'no'
        ]);

        //Creamos la relacion entre la tabla users y roles para nuestro usuario admin
        $useradmin->roles()->sync([$roladmin->id]);

        //Permissions
        $permission_all =[];


        //Permission role
        $permission = Permission::create([
            'name' => 'List role',
            'slug' => 'role.index',
            'description' => 'A user can list roles',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Show role',
            'slug' => 'role.show',
            'description' => 'A user can see role',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Create role',
            'slug' => 'role.create',
            'description' => 'A user can create roles',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Edit role',
            'slug' => 'role.edit',
            'description' => 'A user can Edit roles',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Destroy role',
            'slug' => 'role.destroy',
            'description' => 'A user can destroy roles',
        ]);
        $permission_all[] =$permission->id;


        //Permission user
        $permission = Permission::create([
            'name' => 'List user',
            'slug' => 'user.index',
            'description' => 'A user can list users',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Show user',
            'slug' => 'user.show',
            'description' => 'A user can see user',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Edit user',
            'slug' => 'user.edit',
            'description' => 'A user can Edit users',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Destroy user',
            'slug' => 'user.destroy',
            'description' => 'A user can destroy users',
        ]);
        $permission_all[] =$permission->id;

        //New
        $permission = Permission::create([
            'name' => 'Show own user',
            'slug' => 'userown.show',
            'description' => 'A user can see own user',
        ]);
        $permission_all[] =$permission->id;
        $permission = Permission::create([
            'name' => 'Edit own user',
            'slug' => 'userown.edit',
            'description' => 'A user can Edit own user',
        ]);
        $permission_all[] =$permission->id;



        // $permission = Permission::create([
        //     'name' => 'Create user',
        //     'slug' => 'user.create',
        //     'description' => 'A user can create users',
        // ]);
        // $permission_all[] =$permission->id;

        //Creamos la relacion entre la tabla permissions y roles para nuestro rol admin
        //$roladmin->permissions()->sync( $permission_all );

    }
}
