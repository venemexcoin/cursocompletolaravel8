<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/*use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;*/ //agregamos esto para la creacion de Faker


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = Faker::create();
        foreach(range(1,1000) as $index)
        {
            DB::table('users')->insert([
                'name'      => $faker->name,
                'email'     => $faker->email,
                'password'  => bcrypt('secret')
            ]);
        }*/

        // \App\Models\User::factory(10)->create();

        \App\Models\Post::factory(50)->create();
        \App\Models\Post1::factory(50)->create();
        \App\Models\Usuario::factory(1000)->create();
    }

}
