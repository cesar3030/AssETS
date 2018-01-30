<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Room;
use App\Building;

class Floor extends Model
{
    use SoftDeletes;

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the rooms for the floor.
     */
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    /**
     * Get the rooms for the floor.
     */
    public function building()
    {
        return $this->belongsToOne('App\Building');
    }

}
