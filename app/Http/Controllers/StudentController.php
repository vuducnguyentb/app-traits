<?php

namespace App\Http\Controllers;

use App\Http\Traits\StudentTrait;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use StudentTrait;

    public function index()
    {
        //gọi sang trait
        $student = $this->listData();
        return view('welcome')->with(compact('student'));

    }
}
