<?php

namespace App\Exports;

use App\Blog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class BlogsExport implements FromCollection, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Blog::all();
    }
}
