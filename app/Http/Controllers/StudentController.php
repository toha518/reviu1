<?php
#app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();
        return view('student', compact('students'));
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            Student::find($request->pk)->update([
                $request->name => $request->value
            ]);
            return response()->json(['success' => true]);
        }
    }
}
