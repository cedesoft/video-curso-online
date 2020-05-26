<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_cliente = Role::where('name','cliente')->first();
        $role_admin = Role::where('name','admin')->first();

        $user = new User();
        $user->name = "Pedro";
        $user->email = 'pedro@gmail.com';
        $user->password = bcrypt('query2');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = "Armando";
        $user->email = 'Armando@gmail.com';
        $user->password = bcrypt('query2');
        $user->save();
        $user->roles()->attach($role_cliente);
    }
}
