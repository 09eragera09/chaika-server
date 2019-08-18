<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function attendances()
    {
        $this->hasMany(Attendance::class);
    }

    public function slots()
    {
        $this->hasMany(Slot::class);
    }
}
