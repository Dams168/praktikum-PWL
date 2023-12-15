<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;

class BooksExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book::all();
    }
    public function array(): array
    {
        return Book::export();
    }

    public function headings(): array
    {
        return [
            'No',
            'Judul',
            'Penulis',
            'Tahun',
            'Penerbit'
        ];
    }
}
