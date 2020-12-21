<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Post1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post1s')->insert([
            'title' => 'First Post Title',
            'body'  => 'First POst Body'
        ]);
    }
}
