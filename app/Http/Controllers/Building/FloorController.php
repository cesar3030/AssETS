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
        return view('building.floor.index', ['floors' => $building->floors, 'building' => $building]);
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
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building, Floor $floor)
    {
        return view('building.floor.edit', ['building' => $building, 'floor' => $floor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Building  $building
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building, Floor $floor)
    {
        $floor->name = $request->get('name');
        $floor->save();
        return redirect()->route('building.floor.index', $building);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Building  $building
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building, Floor $floor)
    {
        $floor->delete();
        return redirect()->route('building.floor.index', $building);
    }
}
