<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Custom\Enum\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company = \App\Models\Company::create([
            'name' => 'CloudBaseBook',
            'account_type' => AccountType::SYSTEM->value,
        ]);

        \App\Models\User::create([
            'name' => 'Admin User',
            'email' => 'admin@cloudbasebook.com',
            'password' => bcrypt('cloudbook!123'),
            'company_id' => $company->id,
        ]);
    }
}
