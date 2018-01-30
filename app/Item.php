<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Equipment;
use App\Room;

class Item extends Model
{
    use SoftDeletes;

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the equipment for the item.
     */
    public function equipment()
    {
        return $this->hasOne('App\Equipment');
    }

    /**
     * Get the room for the item.
     */
    public function room()
    {
        return $this->hasOne('App\Room');
    }



}
