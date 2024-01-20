<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Custom\Enum\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company = \App\Models\Company::create([
            'name' => 'CloudBaseBook Test',
            'account_type' => AccountType::TEST->value,
        ]);

        \App\Models\User::create([
            'name' => 'cbb',
            'email' => 'cbb@cloudbasebook.com',
            'password' => bcrypt('cloudbook!test'),
            'company_id' => $company->id,
        ]);
    }
}
