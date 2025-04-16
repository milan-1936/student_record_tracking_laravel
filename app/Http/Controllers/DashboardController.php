<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $students = students::all();
        return view('dashboard.dashboard', compact('students'));
    }

}
