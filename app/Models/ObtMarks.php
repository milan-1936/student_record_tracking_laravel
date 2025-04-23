<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObtMarks extends Model
{
    protected $guarded = [];
    public function student(){
        return $this->belongsTo(students::class);
    }


    public function fmExamSubject(){
        return $this->belongsTo(FMExamSubject::class);
    }
}
