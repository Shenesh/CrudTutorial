<?php

namespace App\Http\Controllers;

use App\Jeny;
use Illuminate\Http\Request;

class jenyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jeny.jeny_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return ("jeny create");
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
     * @param  \App\Jeny  $jeny
     * @return \Illuminate\Http\Response
     */
    public function show(Jeny $jeny)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jeny  $jeny
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeny $jeny)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jeny  $jeny
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jeny $jeny)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jeny  $jeny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeny $jeny)
    {
        //
    }
    public function jenya(){
        //
    }
}
