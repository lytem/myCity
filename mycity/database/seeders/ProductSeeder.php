<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Frigorifero',
            'price' => '23',
            'publish_date'=>now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'title' => 'Iphone',
            'price' => '2300',
            'publish_date'=>now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'title' => 'Samsung',
            'price' => '24000',
            'publish_date'=>now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'title' => 'Televisore',
            'price' => '1250',
            'publish_date'=>now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'title' => 'NoteBook',
            'price' => '450',
            'publish_date'=>now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'title' => 'Tv led',
            'price' => '800',
            'publish_date'=>now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
