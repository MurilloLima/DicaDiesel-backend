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
            'name' => 'Volvo',
            'created_at' => '2020-12-29 12:12:12',
            'updated_at' => '2020-12-29 12:12:12'
        ]);
        DB::table('marcas')->insert([
            'name' => 'Mercedes-Benz',
            'created_at' => '2020-12-29 12:12:12',
            'updated_at' => '2020-12-29 12:12:12'
        ]);
        DB::table('marcas')->insert([
            'name' => 'Iveco',
            'created_at' => '2020-12-29 12:12:12',
            'updated_at' => '2020-12-29 12:12:12'
        ]);
    }
}
