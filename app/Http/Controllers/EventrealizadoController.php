<?php

namespace App\Http\Controllers;

use App\Eventrealizado;
use Illuminate\Http\Request;
use App\Events_Workshops;
use App;
use App\Event;
use App\Workshop;
use App\Instructor;
use App\EventsPrivate;

class EventrealizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    
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
     * @param  \App\Eventrealizado  $eventrealizado
     * @return \Illuminate\Http\Response
     */
    public function show(Eventrealizado $eventrealizado)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eventrealizado  $eventrealizado
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventrealizado $eventrealizado)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eventrealizado  $eventrealizado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventrealizado $eventrealizado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eventrealizado  $eventrealizado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventrealizado $eventrealizado)
    {
        //
    }
}
