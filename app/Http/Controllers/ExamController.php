<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use App\Models\FMExamSubject;
use App\Models\students;
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

        $fms['exam_id'] = Examination::where('name', $request->name)->first()->id;
        FMExamSubject::create($fms);
        return redirect()->back()->with('message', 'Exam Added Successfully');
    }


    public function ShowExams(){

        $exams = Examination::latest()->limit(5)->get();
        return view('dashboard.examination', compact('exams'));
    }

    public function MarkEntryShow(){
        $fms = FMExamSubject::all();
        $exams = FMExamSubject::where('exam_id', Examination::latest()->first()->id)->get();
        $students = students::all();
        return view('dashboard.enter_marks', compact('students', 'exams', 'fms'));
    }

    public function MarkStore(Request $request){
        $data=$request->all();
        $data = $data['student'];
        foreach($data as $studentData) {
            $studentId = $studentData['student_id'];
            $english = $studentData['english'];
            $nepali = $studentData['nepali'];
            $math = $studentData['math'];
            $science = $studentData['science'];
            $social = $studentData['social'];
            $opti = $studentData['opti'];
            $optii = $studentData['optii'];
            $fmExamSubjctId=$studentData['examid'];

        }
        dd($request->all());

    }
}
