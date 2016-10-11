<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10) . '@gmail.com',
            'password' => bcrypt('secret'),
            'is_lock' => 0,
            'date_pwd_exp' => '2016-11-11',
            'created_at' => '2016-10-11',
            'updated_at' => '2016-10-11'
        ]);
    }

}
