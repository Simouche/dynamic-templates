<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTitle extends Model
{
   
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    public function contents(){
        return $this->hasMany('App\Content','menu');
    }
}
