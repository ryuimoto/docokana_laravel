<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class IndexController extends Controller
{
    public function getUser()
    {
        $user = User::first();

        return json_encode($user);
    }
}
