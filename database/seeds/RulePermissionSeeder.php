<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RulePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Variant
        Permission::create(['name' => 'create variant']);
        Permission::create(['name' => 'read variant']);
        Permission::create(['name' => 'update own variant']);
        Permission::create(['name' => 'update variant']);
        Permission::create(['name' => 'delete variant']);

        // Game
        Permission::create(['name' => 'create game']);
        Permission::create(['name' => 'read game']);
        Permission::create(['name' => 'update game']);
        Permission::create(['name' => 'delete game']);

        // User
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'update own user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);


        Role::create(['name'=> 'moderator'])->givePermissionTo([
            'update game', 'delete game',
            'create user', 'update user', 'delete user'
        ]);
        Role::create(['name'=> 'developer'])->givePermissionTo([
            'create variant', 'update own variant'
        ]);
        Role::create(['name'=> 'user'])->givePermissionTo([
            'read variant',
            'create game', 'read game',
            'read user', 'update own user'
        ]);



    }
}
