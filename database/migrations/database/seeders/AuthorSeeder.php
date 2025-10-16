<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye', 'email' => 'tere@example.com'],
            ['name' => 'Andrea Hirata', 'email' => 'andrea@example.com'],
            ['name' => 'Dee Lestari', 'email' => 'dee@example.com'],
            ['name' => 'Ahmad Fuadi', 'email' => 'fuadi@example.com'],
            ['name' => 'Habiburrahman El Shirazy', 'email' => 'habib@example.com'],
        ]);
    }
}
