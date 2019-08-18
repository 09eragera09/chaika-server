<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekday extends Model
{
    public function slots()
    {
        $this->hasMany(Slot::class);
    }
}
