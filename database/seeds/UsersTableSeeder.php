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
        self::create('Theodore Messinezis', 'theo@theomessin.com', 'E8XQ07tJd6"Hpz?');
        self::create('Aurel Bily', 'aurel.bily@gmail.com', 'T71HINTNai');
    }

    /**
     * Create a user and persist
     *
     * @param $name
     * @param $email
     * @param $password
     * @return mixed
     */
    private static function create($name, $email, $password)
    {
        $password = bcrypt($password);
        return \App\User::create(compact('name', 'email', 'password'));
    }
}
