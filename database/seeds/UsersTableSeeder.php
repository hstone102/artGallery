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
        $holly = new \App\User;
        $holly->name = 'Holly';
        $holly->email = 'hstone102@gmail.com';
        $holly->password = bcrypt('secret');
        $holly->save();
        $bob = new \App\User;
        $bob->name = "Bob";
        $bob->email = 'bob@bob.bob';
        $bob->password = bcrypt('secret');
        $bob->save();
        //
    }
}
