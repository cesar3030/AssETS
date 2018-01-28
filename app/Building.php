<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use SoftDeletes;

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The users that manage the building.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Get the floors for the building.
     */
    public function floors()
    {
        return $this->hasMany('App\Floor');
    }
}
