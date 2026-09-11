<?php

namespace App\Http\Controllers;
use App\Service\StudentService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get_stuents(StudentService $student) {
        echo $student->get_students();
    }
}
