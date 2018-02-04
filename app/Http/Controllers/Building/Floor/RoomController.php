<?php

namespace App\Http\Controllers\Building\Floor;

use App\Floor;
use App\Building;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Building $building
     * @param  Floor $floor
     * @return \Illuminate\Http\Response
     */
    public function index(Building $building, Floor $floor)
    {
        return view('building.floor.room.index', [ 
            'building' => $building,
            'floor' => $floor,
            'rooms' => $floor->rooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Building $building
     * @param  Floor $floor
     * @return \Illuminate\Http\Response
     */
    public function create(Building $building, Floor $floor)
    {
        return view('building.floor.room.create', [
            'building' => $building,
            'floor' => $floor
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Building $building
     * @param  Floor $floor
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Building $building, Floor $floor)
    {
        $room = new Room();
        $room->name = $request->get('name');
        $floor->rooms()->save($room);
        return redirect()->route('building.floor.room.index', [$building, $floor]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building, Floor $floor, Room $room)
    {
        return view('building.floor.room.edit', [ 
            'building' => $building,
            'floor' => $floor,
            'room' => $room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building, Floor $floor, Room $room)
    {
        $room->name = $request->get('name');
        $room->save();
        return redirect()->route('building.floor.room.index', [$building, $floor]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building, Floor $floor, Room $room)
    {
        $room->delete();
        return redirect()->route('building.floor.room.index', [$building, $floor]);

    }
}
