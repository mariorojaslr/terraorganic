<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(RubroSeeder::class);
        $this->call(TipoivaSeeder::class);
<<<<<<< HEAD
        $this->call(TiposuserSeeder::class);
=======
        $this->call(TipouserSeeder::class);
>>>>>>> fe69eff6c2065fcfaf6699d311ef8f7ef9023106
    }
}
