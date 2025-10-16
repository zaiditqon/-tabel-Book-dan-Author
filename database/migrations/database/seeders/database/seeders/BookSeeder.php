<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Negeri Para Bedebah', 'description' => 'Novel politik-ekonomi', 'author_id' => 1],
            ['title' => 'Laskar Pelangi', 'description' => 'Inspiratif dan penuh semangat', 'author_id' => 2],
            ['title' => 'Perahu Kertas', 'description' => 'Cerita cinta dan mimpi', 'author_id' => 3],
            ['title' => 'Ranah 3 Warna', 'description' => 'Perjuangan dan impian', 'author_id' => 4],
            ['title' => 'Ketika Cinta Bertasbih', 'description' => 'Novel religi dan cinta', 'author_id' => 5],
        ]);
    }
}
