<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;
use App\Models\Team;
use App\Models\Role;
use App\Models\Responsibility;
use App\Models\Employee;
use Database\Factories\UserCompanyFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Company::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        Team::factory(10)->create();
        Role::factory(10)->create();
        Responsibility::factory(10)->create();
        Employee::factory(10)->create();
        // ]);
    }
}
