<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user =new \App\User ();
        $user ->name ='Ronnarit Guaysa-ard';
        $user ->email ='armza13624@gamil.com';
        $user ->password =Hash::make('123456');
        $user ->save();
    }
}
