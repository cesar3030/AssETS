<?php

namespace App\Http\Controllers\Building;

use App\Floor;
use App\Building;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function index(Building $building)
    {
        dd($building->floors()->all());
        return view('building.floor.index', ['floors' => $building->floors(), 'building' => $building]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Building $building          
     * @return \Illuminate\Http\Response
     */
    public function create($building)
    {
        return view('building.floor.create', ['building' => $building]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Building $building
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Building $building)
    {
        $floor = new Floor();
        $floor->name = $request->get('name');
        $building->floors()->save($floor);
        return redirect()->route('building.floor.index', $building);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function show(Floor $floor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function edit(Floor $floor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Floor $floor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Floor $floor)
    {
        //
    }
}
