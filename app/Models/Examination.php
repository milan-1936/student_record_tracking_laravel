<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    protected $guarded = [];
    public function fmExamSubjects(){
        return $this->hasMany(FMExamSubject::class, 'exam_id');
    }

    public function fmExamSubject(){
        return $this->belongsTo(FMExamSubject::class);
    }
}
