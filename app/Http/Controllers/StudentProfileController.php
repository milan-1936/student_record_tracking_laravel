<?php

namespace App\Http\Controllers;

use App\Models\ObtMarks;
use App\Models\students;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function show(){
        $exams = ObtMarks::all();
        return view('dashboard.student_profile', compact('exams'));
    }

    public function getStudentProfile(Request $request)
    {
        // Validate the request
        $input_data = $request->input('search');
        $student_name = students::where('name', 'LIKE', '%' . $input_data . '%')->get();
        // Debug properly for AJAX
        return response()->json([
            'message' => 'Request received',
            'data' => $student_name,
        ]);
    }

    public function showStudentProfile($id)
    {
        $student = students::findOrFail($id);
        $marks = ObtMarks::where('student_id', $id)->get()->groupBy('fm_exam_subject_id');
//        // Adding elements to an array using a foreach loop
        $gpa = [];
        $exam_name = [];
            foreach ($marks as $key => $m) {
                $gpa[$key] = $m->first()->grade ?? null;
                $exam_name[$key] = $m->first()->fmExamSubject->examination->name ?? null;
            }
        return view('dashboard.student_profile', compact('student', 'marks', 'gpa', 'exam_name'));
    }






}
