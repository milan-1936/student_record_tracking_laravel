<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Services\SmsService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $total_students = students::count()? students::count(): 0;
        $sms = new SmsService();
        $balance = $sms->getBalance()['available_credit'];
        $students = students::paginate(10);
        return view('dashboard.dashboard', compact('students', 'total_students', 'balance'));
    }

}
