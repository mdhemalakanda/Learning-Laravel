<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserReqValidate;

class userInfo extends Controller
{
    public function handleUserReq(UserReqValidate $request)
    {
        $request->rules();

        dd($request->all());
    }
}
