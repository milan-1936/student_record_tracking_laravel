<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use App\Models\FMExamSubject;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function StoreExam(Request $request){

        $exam = $request->validate([
            'name'=> 'required'
            ]
        );

        Examination::create($exam);



        $fms = $request->validate([
                'english'=> 'required|numeric',
                'nepali' => 'required|numeric',
                'math'=> 'required|numeric',
                'science'=> 'required|numeric',
                'social'=> 'required|numeric',
                'opti'=> 'required|numeric',
                'optii'=> 'required|numeric',
            ]
        );

        FMExamSubject::create($fms);

        return redirect()->back()->with('message', 'Exam Added Successfully');
    }
}
