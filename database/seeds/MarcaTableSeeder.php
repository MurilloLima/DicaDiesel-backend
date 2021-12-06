<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'name' => 'Iveco',
            'slug' => 'iveco',
            'created_at' => '2020-12-29 12:12:12',
            'updated_at' => '2020-12-29 12:12:12'
        ]);
    }
}
