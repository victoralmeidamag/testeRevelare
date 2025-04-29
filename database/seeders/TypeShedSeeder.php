<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeShedSeeder extends Seeder
{
    public function run()
    {
        DB::table('type_sheds')->insert([
            ['description' => 'Seco'],
            ['description' => 'Frigorífico'],
            ['description' => 'Resfriado'],

        ]);
    }
}