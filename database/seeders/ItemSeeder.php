<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['name' => 'ふが ほげ'],
            ['name' => 'John Doe'],
            ['name' => 'Jane Doe']]);
    }
}
