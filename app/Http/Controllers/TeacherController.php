<?php

namespace App\Http\Controllers;

use App\Service\TeacherService;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show_register_form() {
        return view('teacher-registration');
    }

    public function handle_teacher(Request $request, TeacherService $teacher) {
        $token = $request->session()->token();
        $is_registered = $teacher->handle_acc();
    }
}
