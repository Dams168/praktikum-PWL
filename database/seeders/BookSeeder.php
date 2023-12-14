<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Buku 1',
            'author' => 'Penulis 1',
            'year' => 2023,
            'publisher' => 'Penerbit 1',
            'city' => 'Cianjur',
            'cover' => 'buku1.com',
            'quantity' => 5,
            'bookshelf_id' => 1,
            'created_at' => now(),
        ]);
        DB::table('books')->insert([
            'title' => 'Buku 2',
            'author' => 'Penulis 2',
            'year' => 2022,
            'publisher' => 'Penerbit 2',
            'city' => 'Bandung',
            'cover' => 'buku2.com',
            'quantity' => 3,
            'bookshelf_id' => 2,
            'created_at' => now(),
        ]);
    }
}
