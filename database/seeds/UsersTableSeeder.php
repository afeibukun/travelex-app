<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        $adminRole = \App\Role::create([
            'name' => 'Admin'
        ]);
        \App\Role::create([
            'name' => 'Supervisor'
        ]);
        \App\Role::create([
            'name' => 'Staff'
        ]);
        \App\Role::create([
            'name' => 'Encasher'
        ]);

        // File Types
        \App\FileType::create([
            'name' => 'displayPicture'
        ]);
        \App\FileType::create([
            'name' => 'authPicture'
        ]);

        // User
        $alphaUser = \App\User::create([
            'first_name' => 'Chinedu',
            'last_name' => 'Alfred',
            'other_name' => 'Olabode',
            'email' => 'admin@travelex.app',
            'phone' => '+234813456789',
            'address' => 'Lagos, Nigeria',
            'password' => bcrypt('secret'),
            'role_id' => $adminRole->id
        ]);
    }
}
