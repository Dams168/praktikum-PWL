<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelves')->insert([
            'code' => 'B001',
            'name' => 'Lemari 1',
        ]);
        DB::table('bookshelves')->insert([
            'code' => 'B002',
            'name' => 'Lemari 2',
        ]);
        DB::table('bookshelves')->insert([
            'code' => 'B003',
            'name' => 'Lemari 3',
        ]);
    }
}
