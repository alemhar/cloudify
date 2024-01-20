<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BallClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\BallClub::create([
            'name' => 'Ateneo Daddys Cup',
            'address1' => 'Home Owners Basketball Court',
            'address2' => 'Dona Luisa Subdivision, Ecoland',
            'city' => 'Davao City',
            'country' => 'Country',
            'website' => 'https://www.google.com',
            'logo' => 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png',
            'contact_name' => 'Alfonso dela Victoria',
            'contact_phone' => '09123456789',
            'contact_email' => 'alfonso@adc.com',
            'contact_role' => 'Chairman',
            'alias' => 'ateaneo-daddys-cup',
        ]);
    }
}
