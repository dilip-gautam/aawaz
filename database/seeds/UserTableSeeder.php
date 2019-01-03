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
            'name' => 'Ram Sharma',
            'slug' => 'ram-sharma',
            'email' => 'flying@gmail.com',
            'password' => bcrypt('apple'),
        ],
        [
            'name' => 'Shyam Aryal',
            'slug' => 'shyam-aryal',
            'email' => 'future@gmail.com',
            'password' => bcrypt('apple'),
        ],
        [
            'name' => 'Hari Parajuli',
            'slug' => 'hari-parajuli',
            'email' => 'excite@gmail.com',
            'password' => bcrypt('apple'),
        ]
        ]);
    }
}
