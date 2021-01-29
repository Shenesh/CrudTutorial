<?php

namespace App\Exports;

use App\Blog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class BlogsViewExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = DB::table('income')->get();
        return view('exports.income',compact('data'));
    }
}
