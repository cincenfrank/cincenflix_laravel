<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function shows()
    {
        return $this->belongsToMany(Show::class);
    }
}
