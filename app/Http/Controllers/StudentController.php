<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() {

        //$students = Student::where('id', '<>', 2)->orderBy('id', 'desc')->limit(2)->get();

        $students = Student::all()->sortBy('surname');


        return view('welcome', compact('students'));
    }
}
