<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jordi',
            'email' => 'jordivalls2010@gmail.com',
            'password' => bcrypt('123123')
         ]);

         User::create([
            'name' => 'Arnau Valls',
            'email' => 'avalls@gmail.com',
            'password' => bcrypt('123123')
         ]);
    }
}
