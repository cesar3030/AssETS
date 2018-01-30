<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use app\Item;
use app\Floor;

class room extends Model
{
    use SoftDeletes;

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the items for a room.
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }

    /**
     * The users that manage the building.
     */
    public function floor()
    {
        return $this->belongsToOne('App\Floor');
    }
}
