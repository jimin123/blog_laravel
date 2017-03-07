<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([

			['name'    => 'Nguyen Duy Minh',
             'username'=> 'admin',
             'email'   => 'admin@gmail.com',
			 'password'=> bcrypt('password'),
             'level'   => 1],
            ['name'    => 'Hoang van Tung',
             'username'=> 'user',
             'email'   => 'user@gmail.com',
             'password'=> bcrypt('password'),
             'level'   => 0]
		]);
    }
}
