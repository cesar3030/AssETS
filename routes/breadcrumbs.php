<?php

// Building
Breadcrumbs::register('building_static', function ($breadcrumbs) {
    $breadcrumbs->push('Building');
});
Breadcrumbs::register('building_dynamic', function ($breadcrumbs, $building) {
    $breadcrumbs->push($building->name, route('building.floor.index', $building->id));
});

// Floor
Breadcrumbs::register('floor_static', function ($breadcrumbs, $building) {
    $breadcrumbs->parent('building_dynamic', $building);
    $breadcrumbs->push("Floors");
});
Breadcrumbs::register('floor_dynamic', function ($breadcrumbs, $building, $floor) {
    $breadcrumbs->parent('building_dynamic', $building);
    $breadcrumbs->push($floor->name, route('building.floor.index', $building->id, $floor->id));
});

// Room
Breadcrumbs::register('room_static', function ($breadcrumbs, $building, $floor) {
    $breadcrumbs->parent('floor_dynamic', $building, $floor);
    $breadcrumbs->push('Rooms');
});
Breadcrumbs::register('room_dynamic', function ($breadcrumbs, $building, $floor, $room) {
    $breadcrumbs->parent('floor_dynamic', $building, $floor);
    $breadcrumbs->push($room->name, route('building.floor.room.index', [$building, $floor]));
});

Breadcrumbs::register('item_static', function ($breadcrumbs, $building, $floor, $room) {
    $breadcrumbs->parent('room_dynamic', $building, $floor, $room);
    $breadcrumbs->push('Itèms');
});