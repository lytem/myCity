<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         // Disabilita il controllo delle chiavi esterne prima
        // di eseguire i Seeders su questa connessione TCP.

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Azzero tutte le tabelle in caso di chiamata
        // multipla dei Seeders.

        DB::table('products')->truncate();
        $this->call([
            ProductSeeder::class,]);
    }
}
