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
        for ($i=0; $i < 10; $i++) { 
            $name = 'ryuimoto';
            $email = 'test';

            DB::table('users')->insert([
                'name' => "$name",
                'email' => "$email$i@gmail.com",
                'password' => bcrypt('qqq111'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
