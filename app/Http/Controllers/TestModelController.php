<?php

namespace App\Http\Controllers;

use App\TestModel;
use Illuminate\Http\Request;
use DB;

class TestModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = DB::table('income')->select('month as month_name')->get();



        return view('test.index',compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestModel  $testModel
     * @return \Illuminate\Http\Response
     */
    public function show(TestModel $testModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestModel  $testModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TestModel $testModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestModel  $testModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestModel $testModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestModel  $testModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestModel $testModel)
    {
        //
    }
}
