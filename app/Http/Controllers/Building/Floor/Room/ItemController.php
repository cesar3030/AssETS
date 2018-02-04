<?php

namespace App\Http\Controllers\Building\Floor\Room;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Building;
use App\Floor;
use App\Room;
use App\Item;
use App\Equipment;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Building $building, Floor $floor, Room $room)
    {
        return view('building.floor.room.item', [
            'building' => $building,
            'floor' => $floor,
            'room' => $room,
            'items' => $room->items,
            'equipments' => Equipment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room $room
     * @return \Illuminate\Http\Response
     */
    public function create(Building $building, Floor $floor, Room $room)
    {
        return view('building.floor.room.create', [
            'building' => $building,
            'floor' => $floor,
            'room' => $room
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room $room
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Building $building, Floor $floor, Room $room)
    {
        $item = new Item();
        $item->quantity = $request->get('quantity');
        $room->items()->save($item);
        return redirect()->route('building.floor.room.item.index', [$building, $floor, $room]);

    }

    /**
     * Display the specified resource.
     *    
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room $room
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building, Floor $floor, Room $room, Item $item)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *    
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room $room
     * @param  Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building, Floor $floor, Room $room, Item $item)
    {
        return view('building.floor.room.edit', [
            'building' => $building,
            'floor' => $floor,
            'room' => $room,
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room $room
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building, Floor $floor, Room $room, Item $item)
    {
        $item->quantity = $request->get('quantity');
        $item->save();
        return redirect()->route('building.floor.room.item.index', [$building, $floor, $room]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Building $building
     * @param  Floor $floor
     * @param  Room $room
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building, Floor $floor, Room $room, Item $item)
    {
        $item->delete();
        return redirect()->route('building.floor.room.item.index', [$building, $floor, $room]);
    }
}
