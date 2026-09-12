<?php

namespace App\Http\Controllers;

use App\Service\TeacherService;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show_register_form()
    {
        return view('teacher-registration');
    }

    public function handle_teacher(Request $request, TeacherService $teacher)
    {
        // pass header.
        // return response('Hello World!', 200)->header('Content-Type', 'text/plain');
        // pass cookie.
        // return response('Hello World!', 200)->cookie('test_cookie', 'Test Cookie', 60);

        // working process.
        // 1. catch the data.
        // 2. insert into database.
        // 3. redirect.
        // return redirect()->back();
        // return redirect()->route('teacher.register');
        // return redirect('https://www.google.com');
        // return view('welcome', ['name', 'hemal']);
        return response()->json([
            'message' => 'json message',
            'data' => $request->all(),
        ]);
    }
}
