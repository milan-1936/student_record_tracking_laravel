<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $guarded = [];

    public function obtainedMarks(){
        return $this->hasMany(ObtMarks::class);
    }
}
