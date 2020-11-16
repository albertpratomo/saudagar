<?php

namespace Database\Seeders;

use Lit\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin (admin@saudagar.id / Password1!).
        if (
            App::environment('testing')
            || User::where('username', 'admin')->exists()
        ) return;

        $admin = new User([
            'username'   => 'admin',
            'email'      => 'admin@saudagar.id',
            'first_name' => 'Admin',
            'last_name'  => '',
        ]);

        $admin->password = bcrypt('Password1!');
        $admin->save();
        $admin->assignRole('admin');

        echo("Created default admin (email: $admin->email) \n");
    }
}
