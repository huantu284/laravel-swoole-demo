<?php

namespace App\Http\Controllers;

use Auth;

class HomeController extends Controller
{
    public function user()
    {
        $user = Auth::guard('user')->user();
        return ['gurad user success'];
    }

    public function admin()
    {
        $user = Auth::guard('admin')->user();
        return ['gurad admin success'];
    }

    public function common()
    {
        return ['common success'];
    }
}
