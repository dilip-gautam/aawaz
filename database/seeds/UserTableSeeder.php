<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Ram',
            'email' => 'flying@gmail.com',
            'password' => bcrypt('apple'),
        ],
        [
            'name' => 'Shyam',
            'email' => 'future@gmail.com',
            'password' => bcrypt('apple'),
        ],
        [
            'name' => 'Hari',
            'email' => 'excite@gmail.com',
            'password' => bcrypt('apple'),
        ]
        ]);
    }
}
