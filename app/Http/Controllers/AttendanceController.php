<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\students;
use App\Services\SmsService;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function show(){
        $date = date('Y-m-d');
        $date_exists = Attendance::where('date', $date)->exists();
        $attendances = Attendance::all();
//        dd($attendances);
        return view('dashboard.attendance', compact('attendances', 'date_exists'));
    }

    public function update(Request $request){
        $absents = [];
        foreach ($request->except('_token') as $key => $status) {
            // Extract student id
            $studentId = (int) str_replace('present', '', $key);
            $today = date('Y-m-d');

            // Find the attendance record
            $attendance = Attendance::find($studentId);

            if ($attendance) {
                if ($status == 'P') {
                    $attendance->attendance += 1;
                } elseif ($status == 'A') {
                    $absents[] = $studentId;
                    $attendance->absent += 1;
                } elseif ($status == 'L') {
                    $attendance->leave += 1;
                }
                $attendance->date = $today;

                $attendance->save();
            }
        }



        $sms = new SmsService;
        foreach ($absents as $absent) {
            $student = students::where('id', $absent)->first();
            if ($student) {
                $sms->sendSms($student->contact, 'Your child is absent today');
            }
        }


        return redirect()->back()->with('message', 'Attendance updated successfully!');
    }
}
