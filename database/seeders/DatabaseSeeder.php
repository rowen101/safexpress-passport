<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Admin\CoreAppSeeder;
use Database\Seeders\Admin\MenuSeeder;
use Database\Seeders\Admin\CoreRoleSeeder;
use Database\Seeders\Admin\CoreUserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([

            CoreAppSeeder::class,
            MenuSeeder::class,
            CoreRoleSeeder::class,
            CoreUserSeeder::class,


        ]);

        // Output success message
    $this->command->info('Database seeded successfully.');
    }
}
