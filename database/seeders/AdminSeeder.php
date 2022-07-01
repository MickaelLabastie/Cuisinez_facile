<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($index=0; $index < 3; $index++) {

            User::create([

                'email' => 'admin'.$index.'@admin.com',
                'password' => Hash::make('admintest'.$index),
                'role' => User::ADMIN_ROLE,
    
            ]);

        }
        
    }
}
