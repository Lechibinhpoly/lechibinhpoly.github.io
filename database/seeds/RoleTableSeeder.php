<?php

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role = new Roles;
        // $role->Name_roles = 'admin';
        // $role->save();
        Roles::create([
        	'Name_roles' => 'admin'
        ]);
        Roles::create([
        	'Name_roles' => 'user'
        ]);
    }
}
