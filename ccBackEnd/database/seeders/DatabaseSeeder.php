<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Contrat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Client::factory(30)->create();
        Contrat::factory(15)->create();
    }
}
