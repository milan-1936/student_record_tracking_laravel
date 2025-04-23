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
        // Get all obtained marks for the student, with necessary relationships
//        dd($request->value);
        $student = students::where('name', 'like', '%'. $request->value . '%')->first();
//        dd($student);

        if(!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $student_id = $student->id;
        $obtainedMarks = ObtMarks::where('student_id', $student_id)
            ->with(['student', 'fmExamSubject.examination']) // eager load everything needed
            ->get();

        if ($obtainedMarks->isEmpty()) {
            return response()->json(['message' => 'No records found for this student'], 404);
        }

        // Extract student info (same for all marks)
        $student = $obtainedMarks->first()->student;

        // Group obtained marks by exam
        $grouped = $obtainedMarks->groupBy(function ($mark) {
            return $mark->fmExamSubject->examination->id;
        });

        // Build structured response
        $exams = $grouped->map(function ($items) {
            $exam = $items->first()->fmExamSubject->examination;

            return [
                'exam_id' => $exam->id,
                'exam_name' => $exam->name,
                'marks' => $items->map(function ($mark) {
                    return [
                        'subject' => $mark->fmExamSubject->subject_name ?? 'N/A', // adjust as needed
                        'score' => $mark->score
                    ];
                })->values()
            ];
        })->values();

        // Final response
        return response()->json([
            'student_id' => $student->id,
            'student_profile' => $student->profile,
            'guardian' => $student->guardian,
            'contact' => $student->contact,
            'student_name' => $student->name,
            'exams' => $exams
        ]);
    }



}
