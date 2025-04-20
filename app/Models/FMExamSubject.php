<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FMExamSubject extends Model
{
    protected $guarded = [];

    public function obtainedMarks(){
        return $this->hasMany(ObtMarks::class, 'fm_exam_subjct_id');
    }
    public function examination(){
        return $this->belongsTo(Examination::class, 'exam_id');
    }
}
