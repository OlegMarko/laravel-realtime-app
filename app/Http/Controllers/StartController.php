<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $data = [
            [
                'title' => 'Google',
                'url' => 'google.com'
            ], [
                'title' => 'YouTube',
                'url' => 'youtube.com'
            ]
        ];

        return view('start')->with('data', $data);
    }
}
