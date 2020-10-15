<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' =>'1',
            'name'=> 'Admin',
            'username'=> 'Laiba',
            'email'=> 'laiba@gmail.com',
            'password'=>  bcrypt('rootlaiba'),

        ]);

        DB::table('users')->insert([
            'role_id' =>'2',
            'name'=> 'Author',
            'username'=> 'Fatima',
            'email'=> 'fatima@gmail.com',
            'password'=>  bcrypt('rootfatima'),

        ]);
    }
}
