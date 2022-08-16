<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = 'admin@a.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        
        $admin->password = bcrypt('12345678');
        $admin->is_admin = '1';
        $admin->save();

        $admin = new User;
        $admin->name = 'user';
        $admin->email = 'user@a.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        
        $admin->password = bcrypt('12345678');
        $admin->is_admin = '0';
        $admin->save();
            foreach ($admin as $key => $value) {
                User::create($value);
            }
    }
}
