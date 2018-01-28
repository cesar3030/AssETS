<?php

// Building
Breadcrumbs::register('building', function ($breadcrumbs, $building) {
    $breadcrumbs->push($building->name, route('building.show', $building->id));
});

// Floor
Breadcrumbs::register('floor', function ($breadcrumbs, $floor) {
    $breadcrumbs->parent('building', $floor->$building);
    $breadcrumbs->push($floor->name, route('floor.show', $floor));
});

// Room
Breadcrumbs::register('room', function ($breadcrumbs, $room) {
    $breadcrumbs->parent('floor', $room->$floor);
    $breadcrumbs->push($room->name);
});