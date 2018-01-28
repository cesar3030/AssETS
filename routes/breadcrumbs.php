<?php

// Building
Breadcrumbs::register('building', function ($breadcrumbs, $building) {
    $breadcrumbs->push($building->name, route('building.show', $building->id));
});

// Floor
Breadcrumbs::register('floor', function ($breadcrumbs, $building, $floor) {
    $breadcrumbs->parent('building', $building);
    $breadcrumbs->push($floor->name, route('building.floor.index', $building->id, $floor->id));
});

// Room
Breadcrumbs::register('room', function ($breadcrumbs, $building, $floor, $room) {
    $breadcrumbs->parent('floor', $building, $floor);
    $breadcrumbs->push($room->name, route('building.floor.room.index', $building->id, $floor->id, $room->id));
});