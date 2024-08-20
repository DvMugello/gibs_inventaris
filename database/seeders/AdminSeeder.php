<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Admin',
            'username'=>'Admin Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'phone'=> '081234567899',
            'password' => bcrypt('password'),
        ];

        $cek = User::where('email', $data['email'])->first();

        if (!$cek) {
            $admin = User::create($data);

            $admin->assignRole('admin');
        }
    }
}
