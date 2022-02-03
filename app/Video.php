<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
