<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function show()
    {
        return $this->belongsTo(Show::class);
    }
}
