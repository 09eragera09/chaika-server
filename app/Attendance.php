<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function subject()
    {
        $this->belongsTo(Subject::class);
    }

    public function slot()
    {
        $this->belongsTo(Slot::class);
    }

}
