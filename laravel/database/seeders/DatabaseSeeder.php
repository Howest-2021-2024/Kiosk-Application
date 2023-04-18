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
        $base_registration = Registration::create([
            'first_name' => 'Tuur',
            'last_name' => 'Delacroix',
            'email' => 'tuur.delacroix@student.howest.be'
        ]);
    }
}
