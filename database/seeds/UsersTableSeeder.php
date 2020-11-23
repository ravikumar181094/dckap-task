<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mHC0C5ivJq8gQK1eWSKM6eAcURIXVx3r6PNhPyf7oqYbNSDe9YgCe', // 123456789
                'remember_token' => NULL,
                'created_at' => '2020-11-23 15:04:50',
                'updated_at' => '2020-11-23 15:04:50',
            ),
        ));
        
        
    }
}