<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        return view('dashboard.add_student');
    }

    public function create(Request $request){
        $data = $request->validate([
            'rn' => 'required|integer',
           'name' => 'required|string|max:255',
           'contact' => 'required|string|max:255',
           'guardian' => 'required|string|max:255',
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string|max:255',
            'dob' => 'required|date',
        ]);
//        handles images
        if($request->hasFile('profile')){
            $imagename = $data['name']. ".". $data['profile']->extension();
            $data['profile'] = $request->file('profile')->move(public_path('images/photos'), $imagename);
        }
        $data['profile'] = $imagename;

        students::create($data);
        return redirect()->back()->with('message',  'student Added Successfully');
    }

    public function show(){
        $students = students::all();
        return view('dashboard.students', compact('students'));
    }

}
