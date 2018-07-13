<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
