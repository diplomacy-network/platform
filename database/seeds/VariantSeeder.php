<?php

use Illuminate\Database\Seeder;
use App\Variant;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Variant::create([
            'name' => 'Classic',
            'default_number_eog_supply_centers' => 18,
            'start_year' => 1901,
        ])->countryTemplates()->createMany([
            ['name' => 'Russia'],
            ['name' => 'Germany'],
            ['name' => 'Austria'],
            ['name' => 'France'],
            ['name' => 'Turkey'],
            ['name' => 'England'],
            ['name' => 'Italy'],
        ]);
    }
}
