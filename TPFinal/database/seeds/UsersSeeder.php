<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create(
            [
                'name' => 'ricardo',
                'lastname' => 'nieva',
                //'telephone' => '3814235678',
                'email' => 'richard@gmail.com',
                'password' => bcrypt('1234')
            ]
    );
    //genera 10 usuarios según la definicion del modelo
    //en el archivo /database/factories/ModelFactory.php
    factory(App\User::class,10)->create();
        }
    
}
