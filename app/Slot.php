<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public function attendances()
    {
        $this->hasMany(Attendance::class);
    }

    public function weekday()
    {
        $this->belongsTo(Weekday::class);
    }

    public function subject()
    {
        $this->belongsTo(Subject::class);
    }

}
