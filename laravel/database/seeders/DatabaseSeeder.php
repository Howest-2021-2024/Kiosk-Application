<?php

namespace Database\Seeders;

use App\Models\Registration;
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
        Registration::create([
            'first_name' => 'Tuur',
            'last_name' => 'Delacroix',
            'email' => 'tuur.delacroix@student.howest.be'
        ]);

        Registration::create([
            'first_name' => 'Brian',
            'last_name' => 'Bota',
            'email' => 'brian.bota@student.howest.be'
        ]);

        Registration::create([
            'first_name' => 'Daan',
            'last_name' => 'Dewaele',
            'email' => 'daan.dewaele@student.howest.be'
        ]);
    }
}
