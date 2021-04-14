<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    public function getUser()
    {
        $user = User::first();

        return json_encode($user);
    }

    public function imagePath($image_path){

        dd(464757);
        Log::debug($image_path);
        
    }
}
