<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Du lich",
            'description' => 'a',
            'avatar' => 'a,png',
        ]);

        DB::table('categories')->insert([
            'name' => "Tin tuc",
            'description' => 'a',
            'avatar' => 'a,png',
        ]);
    }
}
