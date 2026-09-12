<?php

namespace App\Http\Controllers;

use App\Service\Logger;
use App\Service\Notice;
use Illuminate\Http\Request;

class userInfo extends Controller
{
    public function user_info(Logger $logger)
    {
        $log = $logger->log('Hello this is logger');
        echo $log;
    }

    public function get_notice(Notice $notice)
    {
        echo $notice->print('Hello its notice');
    }

    public function handleUserReq(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:6', 'max:50'],
        ]);

        dd($request->all());
    }
}
