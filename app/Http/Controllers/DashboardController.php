<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $total_students = students::count()? students::count(): 0;
        $students = students::all();
        return view('dashboard.dashboard', compact('students', 'total_students'));
    }

}
