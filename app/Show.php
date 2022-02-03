<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    //
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
}
