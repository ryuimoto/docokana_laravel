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
        for ($i=0; $i < 5; $i++) { 
            $name = 'ryuimoto';
            $email = 'test';

            DB::table('users')->insert([
                'name' => "$name",
                'email' => "$email$i@gmail.com",
                'password' => bcrypt('qqq111'),
                'image_path' => "$email$i.jpeg",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
