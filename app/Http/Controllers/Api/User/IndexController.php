<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    public function getUser(Request $request)
    {
        Log::debug($request->all());
        
        // $user = User::first();


        // return json_encode($user);

    }

    public function imagePath($image_path)
    {
        Log::debug($image_path);
    }
}
