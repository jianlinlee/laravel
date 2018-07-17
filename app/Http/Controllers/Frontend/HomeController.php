<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{

    public function index()
    {

        return view('frontend.index');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|max:11',
            'code' => 'required|max:6'
        ]);
        echo '<pre/>';
        var_dump($validatedData);
        var_dump($request->post());
        var_dump($request);
        die;
    }

    public function demo()
    {
//        echo '<pre/>';
        $user = Redis::set('name','lee');
        var_dump($user);
        $user = Redis::get('name');
        var_dump($user);
//        $values = Redis::lrange('name', 1, 3);
//        var_dump($values);
    }
}
