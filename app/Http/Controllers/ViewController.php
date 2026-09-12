<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    public function show_info()
    {
        $pageTitle = 'View Page';

        // return view('view-blade', compact('pageTitle')); // most used
        // return view('view-blade')->with('pageTitle', $pageTitle);
        return View::first(['student.student-details', 'welcome'], ['pageTitle' => $pageTitle]);
    }
}
