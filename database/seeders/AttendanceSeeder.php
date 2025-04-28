<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = students::all();
        foreach($students as $student){
            Attendance::create([
                'student_id'=> $student->id,
                'name'=> $student->name,
                'attendance' => 0,
                'leave' => 0,
                'absent' => 0,
            ]);
        }
    }
}
