<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('type_users')->insert([
            ['description' => 'locatorio']
        ]);
    }
}