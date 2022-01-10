<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TabController extends Controller
{
    public function index(){
        return view('Tabs.index');
    }
    public function tab1(){
        return redirect('/tabs/#tab1');
    }
    public function tab2(){
        return redirect('/tabs/#tab2');
    }
    public function tab3(){
        return redirect('/tabs/#tab3');
    }
}
