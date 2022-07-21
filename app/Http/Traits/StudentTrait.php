<?php
namespace App\Http\Traits;
use App\Models\Student;

trait StudentTrait {
//Viết các method ở đây.
    public function listData() {
        // Fetch all the students from the 'student' table.
        return $students = Student::all();
    }
}
