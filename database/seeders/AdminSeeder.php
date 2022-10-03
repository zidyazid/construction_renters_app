<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => \bcrypt('admin'),
                'is_admin' => true
            ],
            [
                'name' => 'diyaz',
                'email' => 'diyaz@gmail.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => \bcrypt('diyaz'),
                'is_admin' => false
            ],
        ];
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'email_verified_at' => date('Y-m-d H:i:s', time()),
        //     'password' => \bcrypt('admin'),
        //     'is_admin' => true
        // ]);
        foreach ($user as $key => $v) {
            # code...
            User::create($v);
        }
    }
}
